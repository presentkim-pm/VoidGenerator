<?php

/*
 *
 *  ____                           _   _  ___
 * |  _ \ _ __ ___  ___  ___ _ __ | |_| |/ (_)_ __ ___
 * | |_) | '__/ _ \/ __|/ _ \ '_ \| __| ' /| | '_ ` _ \
 * |  __/| | |  __/\__ \  __/ | | | |_| . \| | | | | | |
 * |_|   |_|  \___||___/\___|_| |_|\__|_|\_\_|_| |_| |_|
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the MIT License.
 *
 * @author  PresentKim
 * @link    https://github.com/PresentKim
 * @license https://www.gnu.org/licenses/mit MIT License
 *
 *   (\ /)
 *  ( . .) ♥
 *  c(")(")
 */

declare(strict_types=1);

namespace kim\present\generator\void;

use pocketmine\world\format\Chunk;
use pocketmine\world\generator\Generator;

class VoidGenerator extends Generator{
    public function generateChunk(int $chunkX, int $chunkZ) : void{
        $chunk = new Chunk(0, 0);
        $chunk->setGenerated();
        $chunk->setX($chunkX);
        $chunk->setZ($chunkZ);
        $this->world->setChunk($chunkX, $chunkZ, $chunk);
    }

    public function populateChunk(int $chunkX, int $chunkZ) : void{ }
}