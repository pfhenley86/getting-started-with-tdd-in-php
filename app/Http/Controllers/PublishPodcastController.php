<?php

namespace App\Http\Controllers;

use App\Enums\PodcastStatus;
use App\Mail\PodcastPublishedMail;
use App\Models\Podcast;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Http\Request;

class PublishPodcastController extends Controller
{
    public function __invoke( Podcast $podcast, Mailer $mailer)
    {
        // Publish podcast
        $podcast->update(['status' => PodcastStatus::PUBLISHED]);

        // Send email to author
        $mailer->to($podcast->user)->send(new PodcastPublishedMail());
    }
}
