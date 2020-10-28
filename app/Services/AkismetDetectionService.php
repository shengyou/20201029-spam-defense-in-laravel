<?php

namespace App\Services;

use nickurt\Akismet\Akismet;

class AkismetDetectionService
{
    /**
     * @var Akismet
     */
    private $akismet;

    public function __construct(Akismet $akismet)
    {
        $this->akismet = $akismet;
    }

    /**
     * Reference: https://akismet.com/development/api/#comment-check
     *
     * @param  string  $name
     * @param  string  $email
     * @param  string  $message
     * @return bool
     * @throws \nickurt\Akismet\Exception\AkismetException
     * @throws \Exception
     */
    public function checkContactMessage(string $name, string $email, string $message): bool
    {
        if ($this->akismet->validateKey()) {
            $this->akismet->setCommentType('contact-form')
                ->setCommentAuthor($name)
                ->setCommentAuthorEmail($email)
                ->setCommentContent($message);

            return $this->akismet->isSpam();
        }

        return true;
    }
}
