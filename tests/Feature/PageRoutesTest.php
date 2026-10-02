<?php

namespace Tests\Feature;

use PHPUnit\Framework\Attributes\DataProvider;
use Tests\TestCase;

class PageRoutesTest extends TestCase
{
    public static function pageProvider(): array
    {
        return [
            'beranda' => ['/', 'Denpasar Institute'],
            'sop' => ['/sop', 'SOP'],
            'interview' => ['/interview', 'Interview'],
            'diklat' => ['/diklat', 'Jabatan'],
            'lokakarya' => ['/lokakarya', 'LOKAKARYA'],
            'training' => ['/training', 'IN-HOUSE'],
            'sdm' => ['/sdm', 'DIKLAT'],
            'tailor' => ['/tailor', 'TAILOR'],
            'karir dosen' => ['/karir-dosen', 'KARIR'],
        ];
    }

    #[DataProvider('pageProvider')]
    public function test_each_program_page_renders(string $path, string $expectedText): void
    {
        $response = $this->get($path);

        $response->assertOk();
        $response->assertSee($expectedText, escape: false);
    }

    public function test_the_old_spaced_url_redirects_to_the_slug(): void
    {
        $this->get('/karier%20dosen')
            ->assertStatus(301)
            ->assertRedirect(route('karir-dosen'));
    }

    public function test_no_page_exposes_a_dead_href(): void
    {
        foreach (array_keys(self::pageProvider()) as $key) {
            [$path] = self::pageProvider()[$key];
            $html = $this->get($path)->getContent();

            foreach (['href=""', 'href="#"'] as $dead) {
                $this->assertStringNotContainsString(
                    $dead,
                    $html,
                    "{$path} still contains a dead link ({$dead})"
                );
            }
        }
    }

    public function test_every_page_declares_its_language(): void
    {
        foreach (array_keys(self::pageProvider()) as $key) {
            [$path] = self::pageProvider()[$key];

            $this->assertStringContainsString('<html lang="id"', $this->get($path)->getContent());
        }
    }
}
