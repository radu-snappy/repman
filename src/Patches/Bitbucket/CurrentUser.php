<?php

declare(strict_types=1);

namespace Buddy\Repman\Patches\Bitbucket;

use Bitbucket\Api\CurrentUser as OriginalCurrentUser;

class CurrentUser extends OriginalCurrentUser
{
    public function listWorkspaces(array $params = [])
    {
        $uri = $this->buildCurrentUserUri('workspaces');

        return $this->get($uri, $params);
    }
}
