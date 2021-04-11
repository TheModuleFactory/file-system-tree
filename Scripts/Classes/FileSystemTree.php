<?php declare(strict_types=1);

namespace Package\Classes;

/**
 * @copyright 2021 &copy; Steve R. Lewis, The Module Factory Ltd.
 *
 * @author Steve R. Lewis <steve@themodulefactory.com>
 * The Module Factory Ltd. Company Number; 09989173
 * https://www.themodulefactory.com
 *
 * A small package that provides a class that defines an object which lists all sub folder nodes and the files
 * within a given "seed" directory.
 *
 * This program is free software: you can redistribute it and/or modify it under the terms of the
 * GNU Affero General Public License as published by the Free Software Foundation, either version 3 of the License,
 * or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the
 * implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @license https://github.com/TheModuleFactory/file-system-tree/blob/main/LICENSE
 * See the GNU Affero General Public License Version 3 for more details.
 * You should have received a copy of the GNU Affero General Public License along with this program.
 * If not, see <https://www.gnu.org/licenses/>.
 *
 * @version 1.0.0
 *
 * Class FileSystemTree
 * @package Package\Classes
 */
class FileSystemTree
{
    /**
     * @var array|null
     */
    private array $fileSystemTree;
    /**
     * @var array
     */
    private array $listRootFolders;
    /**
     * @var array
     */
    private array $listFoldersAndFiles;
    /**
     * @var array
     */
    private array $listFolders;
    /**
     * @var array
     */
    private array $listFiles;

    /**
     * FileSystemTree constructor.
     * @param string $dirRead
     */
    public function __construct(string $dirRead = DIRECTORY_SEPARATOR)
    {
        $this->fileSystemTree = $this->populateObject(0, $dirRead);
    }

    /**
     * @return array|null
     */
    public function getFileSystemTree(): ?array
    {
        return $this->fileSystemTree;
    }

    /**
     * @return array
     */
    public function getListRootFolders(): array
    {
        return $this->listRootFolders;
    }

    /**
     * @return array
     */
    public function getListFoldersAndFiles(): array
    {
        return $this->listFoldersAndFiles;
    }

    /**
     * @return array
     */
    public function getListFolders(): array
    {
        return $this->listFolders;
    }

    /**
     * @return array
     */
    public function getListFiles(): array
    {
        return $this->listFiles;
    }

    /**
     * @param int $depth
     * @param string $baseDir
     * @param string $fileSystemList
     * @return array|null
     */
    private function populateObject(int $depth, string $baseDir, string $fileSystemList = ""): ?array
    {
        $fileSys = scandir($baseDir);
        $recursFilesSys = array();

        $callDepth = $depth + 1;

        foreach ($fileSys as $key => $fileSystemItem)
        {
            if (!in_array($fileSystemItem, array(".", ".."))) {
                $loopInitDir = $baseDir . DIRECTORY_SEPARATOR . $fileSystemItem;
                $loopList = $fileSystemList . DIRECTORY_SEPARATOR . $fileSystemItem;

                if ($callDepth == 1) {
                    $this->listRootFolders[] = $fileSystemItem;
                }

                if (is_dir($baseDir . DIRECTORY_SEPARATOR . $fileSystemItem)) {
                    if (!$this->isDirEmpty($loopInitDir)) {
                        $recursFilesSys[$fileSystemItem] = $this->populateObject($callDepth, $loopInitDir, $loopList);
                    } else {
                        $this->listFoldersAndFiles[] = $loopInitDir;
                        $this->listFolders[] = $loopInitDir;
                    }
                } else {
                    $this->listFoldersAndFiles[] = $loopInitDir;
                    $this->listFiles[] = $loopInitDir;
                    $recursFilesSys[] = $fileSystemItem;
                }
            }
        }
        return $recursFilesSys;
    }

    /**
     * @param $dirTestForEmpty
     * @return bool|null
     */
    private function isDirEmpty($dirTestForEmpty): ?bool
    {
        if (!is_readable($dirTestForEmpty)) return NULL;
        return (count(scandir($dirTestForEmpty)) == 2);
    }
}