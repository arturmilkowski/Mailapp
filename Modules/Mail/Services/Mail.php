<?php

declare(strict_types=1);

namespace Modules\Mail\Services;

use Illuminate\Support\Facades\Mail as MailFacade;
use Modules\Mail\Emails\AppMail;

class Mail
{
    /**
     * Handle action.
     *
     * @param array $data Mail data
     * 
     * @return boolean
     */
    public static function handle(array $data): bool
    {
        MailFacade::to($data['to'])->send(new AppMail($data));

        return true;
    }
}
