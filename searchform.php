<form method="get" id="searchform" action="<?php echo home_url(); ?>/">
<input type="text" class="search_input" value="Поиск" name="s" id="sform" onfocus="if (this.value == 'Поиск') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Поиск';}" />
<input type="hidden" id="searchsubmit" value="Search"/>
<button type="submit" class="icon-binoculars button-search"></button>
</form>
