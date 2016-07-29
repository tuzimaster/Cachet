<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Commands\TimedAction;

use CachetHQ\Cachet\Models\TimedAction;

/**
 * This is the report timed action instance command class.
 *
 * @author James Brooks <james@alt-three.com>
 */
final class ReportTimedActionInstanceCommand
{
    /**
     * The action.
     *
     * @var \CachetHQ\Cachet\Models\TimedAction
     */
    public $action;

    /**
     * The instance message.
     *
     * @var null|string
     */
    public $message;

    /**
     * Create a new report timed action instance command.
     *
     * @param \CachetHQ\Cachet\Models\TimedAction $action
     *
     * @return void
     */
    public function __construct(TimedAction $action)
    {
        $this->action = $action;
    }
}
