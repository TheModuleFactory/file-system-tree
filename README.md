# File System Tree

@Version1.1.0

Provides a class definition which can be used to instantiate an object that has properties and methods for manipulating lists of all the subfolder nodes and files contained within subfolder nodes for a defined parent directory.  The specific parent directory can be passed as an optional argument to the object constructor.

If no directory path is supplied to the object constructor when the object is instantiated, the new object defaults to the directory of the local host system from where the php CLI was called.

***

## Installation

```composer require themodulefactory/file-system-tree```

***

## Use
FileSystemTree

FileSystemTree constructor.<br>
&nbsp;&nbsp;&nbsp;&nbsp;__construct&nbsp;&nbsp;(string $dirRead = DIRECTORY_SEPARATOR)<br>
&nbsp;&nbsp;&nbsp;&nbsp;@param string $dirRead

***

### Properties
The object has the following properties;
* \$fileSystemTree
    * \@var private array|null
* \$listRootFolders
    * \@var private array
* \$listFoldersAndFiles
    * \@var private array
* \$listFolders
    * \@var private array
* \$listFiles
    * \@var private array

***

### Methods
* getFileSystemTree ()
    * \@return array|null
* getListRootFolders ()
    * \@return array
* getListFoldersAndFiles ()
    * \@return array
* getListFolders ()
    * \@return array
* getListFiles ()
    * \@return array

***

**This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.**

&nbsp;&nbsp;&nbsp;&nbsp;License [https://github.com/TheModuleFactory/file-system-tree/blob/main/LICENSE](https://github.com/TheModuleFactory/file-system-tree/blob/main/LICENSE)

&nbsp;&nbsp;&nbsp;&nbsp;See the GNU Affero General Public License Version 3 for more details.<br>
&nbsp;&nbsp;&nbsp;&nbsp;You should have received a copy of the GNU Affero General Public License along with this program.<br>
&nbsp;&nbsp;&nbsp;&nbsp;If not, see [https://www.gnu.org/licenses](https://www.gnu.org/licenses).

&nbsp;&nbsp;&nbsp;&nbsp;Author Steve R. Lewis <steve@themodulefactory.com><br>
&nbsp;&nbsp;&nbsp;&nbsp;[**Copyright 2021 &copy; The Module Factory Ltd.** Company Number; 09989173](https://www.themodulefactory.com)