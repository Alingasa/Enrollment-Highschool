<?php

namespace App;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum MessageStatus: string implements HasLabel, HasIcon, HasColor
{
    case PENDING = '1';
    case READ = '2';
    // case SETID = 'Set ID';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::PENDING => 'Unread',
            self::READ => 'Read',
            // self::SETID => 'Set ID',
        };
    }

    public function getColor(): string | array | null
    {
        return match ($this) {
            self::PENDING    => 'primary',
            self::READ    => 'success',
            // self::SETID    => 'success',
        };
    }

    public function getIcon(): ?string
    {
        return match ($this) {
            self::READ    => 'heroicon-o-envelope-open',
            self::PENDING      => 'heroicon-o-envelope',
            // self::SETID    => 'heroicon-o-check-circle',
        };
    }
}
