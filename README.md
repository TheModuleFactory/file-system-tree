# File System Tree

@Version1.1.0

Provides a class definition which can be used to instantiate an object that has properties and methods for manipulating lists of all the subfolder nodes and files contained within subfolder nodes for a defined parent directory.  The specific parent directory can be passed as an optional argument to the object constructor.

If no directory path is supplied to the object constructor when the object is instantiated, the new object defaults to the directory of the local host system from where the php CLI was called.

***

## Installation
Easy installation using [Composer](https://getcomposer.org/):

```bash
$ composer require themodulefactory/file-system-tree
```

or add it manually to your `composer.json` file.

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
### **DISCLAIMER**<br>
THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED
TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF
CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
DEALINGS IN THE SOFTWARE.

***
### **DISCLAIMER**<br>
THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED
TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF
CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
DEALINGS IN THE SOFTWARE.

***
### **LICENSE DETAILS**
* [https://github.com/TheModuleFactory/file-system-tree/blob/main/LICENSE](https://github.com/TheModuleFactory/file-system-tree/blob/main/LICENSE)

For more information regarding Open Source Licensing you can visit;<br>
1. [**https://www.mit.edu/~amini/LICENSE.md**](https://www.mit.edu/~amini/LICENSE.md)

2. [**https://opensource.org/licenses/MIT**](https://opensource.org/licenses/MIT)

***
### **AUTHOR**
**Steve Lewis** <steve@themodulefactory.com><br>
[**Copyright 2021 &copy; The Module Factory Ltd.** Company Number; 09989173](https://www.themodulefactory.com)
*** 
