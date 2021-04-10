<?php declare(strict_types=1);

namespace Package\Classes;

/**
 * Class ReadTree
 * @package Package\Classes
 */
class ReadTree
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
     * ReadTree constructor.
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