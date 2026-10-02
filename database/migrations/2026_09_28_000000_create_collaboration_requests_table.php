<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Submissions from the collaboration form on /kolaborasi.
 *
 * The site has no working mail transport (MAIL_MAILER=log), so this table is
 * the actual destination for a submission. Storing the row is the honest way to
 * make the form real: nothing on the confirmation page claims an email was sent
 * when no mail server is configured.
 */
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('collaboration_requests', function (Blueprint $table) {
            $table->id();
            $table->string('name', 120);
            $table->string('organisation', 160);
            $table->string('email', 190);
            $table->string('phone', 40)->nullable();
            $table->text('message');

            // Where the submission came from. Kept so a spam wave can be traced
            // without adding tracking cookies to a form that asks for no data.
            $table->string('source_ip', 45)->nullable();

            $table->timestamps();

            // Reads are always "latest first, for this address", and an index
            // on email avoids a full scan once the table grows.
            $table->index(['email', 'created_at']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('collaboration_requests');
    }
};
