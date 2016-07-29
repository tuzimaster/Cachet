<?php

namespace Bus\Handlers\Commands\TimedAction;

use CachetHQ\Cachet\Bus\Commands\TimedAction\CreateTimedActionCommand;
use CachetHQ\Cachet\Bus\Events\TimedAction\TimedActionWasAddedEvent;
use CachetHQ\Cachet\Models\TimedAction;

/**
 * This is the create timed action command handler.
 *
 * @author James Brooks <james@alt-three.com>
 */
class CreateTimedActionCommandHandler
{
    /**
     * Handle the add timed action command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\TimedAction\CreateTimedActionCommand $command
     *
     * @return \CachetHQ\Cachet\Models\TimedAction
     */
    public function handle(CreateTimedActionCommand $command)
    {
        $timedAction = TimedAction::create([
            'name'               => $command->name,
            'description'        => $command->description,
            'active'             => $command->active,
            'timezone'           => $command->timezone,
            'schedule_frequency' => $command->schedule_frequency,
            'completion_latency' => $command->completion_latency,
            'group'              => $command->group,
        ]);

        event(new TimedActionWasAddedEvent($timedAction));

        return $timedAction;
    }
}
