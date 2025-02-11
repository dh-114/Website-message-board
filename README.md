### 网友留言板系统说明文档

#### 概述
这是一个简单的PHP留言板应用，它允许用户提交留言，并在指定位置将留言插入到一个HTML文件中。此应用包括了基本的违禁词过滤功能，以确保内容的安全性。

#### 功能特性
- **留言提交**：用户可以通过表单提交留言。
- **违禁词过滤**：系统预设了一些违禁词，若用户的留言包含这些词汇，系统会阻止留言提交并给出提示。
- **自动跳转**：成功提交留言后，页面会自动跳转至留言展示页。

#### 使用步骤
1. 用户访问留言板页面，输入留言内容。
2. 系统检查留言是否为空或包含违禁词。
3. 若留言符合要求，则将其插入到`messages.html`文件的第43行之前。
4. 成功提交后，用户将被重定向到留言展示页面查看所有留言。

#### 安装与配置
- 确保你的服务器支持PHP。
- 将代码放置于服务器上的合适目录。
- 根据需要编辑`$banned_words`数组，添加或删除违禁词。
- 修改`$lineToInsertBefore`变量值来调整留言插入位置（默认为第43行）。

#### 注意事项
- 由于留言直接写入HTML文件，可能存在安全风险，请确保对用户输入进行了适当的过滤和验证。
- 当前版本未实现复杂的错误处理机制，请根据实际需求进行扩展。
