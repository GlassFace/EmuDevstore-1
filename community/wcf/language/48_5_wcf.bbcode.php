<?php
/**
* WoltLab Community Framework
* language: de
* encoding: UTF-8
* category: wcf.bbcode
* generated at Tue, 13 Aug 2013 11:30:43 +0000
* 
* DO NOT EDIT THIS FILE
*/
$this->items[$this->languageID]['wcf.bbcode.code.text'] = '---Quellcode---
{$content}
---Quellcode Ende---
';
$this->dynamicItems[$this->languageID]['wcf.bbcode.code.text'] = '---Quellcode---
<?php echo StringUtil::encodeHTML($this->v[\'content\']); ?>
---Quellcode Ende---';
$this->items[$this->languageID]['wcf.bbcode.code.title'] = 'Quellcode';
$this->items[$this->languageID]['wcf.bbcode.quote.cite.text'] = ' (Original von {$name})';
$this->dynamicItems[$this->languageID]['wcf.bbcode.quote.cite.text'] = ' (Original von <?php echo StringUtil::encodeHTML($this->v[\'name\']); ?>)';
$this->items[$this->languageID]['wcf.bbcode.quote.text'] = '---Zitat{$cite}---
{$content}
---Zitat Ende---
';
$this->dynamicItems[$this->languageID]['wcf.bbcode.quote.text'] = '---Zitat<?php echo StringUtil::encodeHTML($this->v[\'cite\']); ?>---
<?php echo StringUtil::encodeHTML($this->v[\'content\']); ?>
---Zitat Ende---';
$this->items[$this->languageID]['wcf.bbcode.quote.title'] = 'Zitat{if $quoteAuthor} von &raquo;{@$quoteAuthor}&laquo;{/if}';
$this->dynamicItems[$this->languageID]['wcf.bbcode.quote.title'] = 'Zitat<?php if ($this->v[\'quoteAuthor\']) { ?> von &raquo;<?php echo $this->v[\'quoteAuthor\']; ?>&laquo;<?php } ?>';
?>