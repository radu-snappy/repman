<?php

declare(strict_types=1);

namespace Buddy\Repman\Patches\Bitbucket;

use Bitbucket\Api\CurrentUser as OriginalCurrentUser;

class Client extends \Bitbucket\Client
{
    public function currentUser(): OriginalCurrentUser
    {
        return new CurrentUser($this);
    }
}
