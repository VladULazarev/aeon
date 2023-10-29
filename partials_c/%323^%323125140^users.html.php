<div class="sub_header">
    <div>
        <div class="btn_sub" onclick="common.user_edit_window();">Add</div>
    </div>
    <div>
        <div id="paginator"><?php echo self::$_tpl_vars['paginator']; ?>
</div>
        <div class="input_group">
            <i class="icon_search"></i>
            <input id="search" type="text" value="<?php echo self::$_tpl_vars['search']; ?>
" placeholder="Search" oninput="common.search_do('users');">
        </div>
        <div class="input_group select-value">
            <select name="search-field" id="search-field">
                <option value="">Select value for searching</option>
                <option value="first_name">Search by 'First name'</option>
                <option value="last_name">Search by 'Last name'</option>
                <option value="phone">Search by 'Phone'</option>
                <option value="email">Search by 'Email'</option>
            </select>
        </div>
    </div>
</div>
<div id="table">
    <?php $_html_tpl_vars = self::$_tpl_vars;
self::include_file(['file'=>"./partials/users_table.html", 'vars'=>[]]);
self::$_tpl_vars = $_html_tpl_vars;
unset($_html_tpl_vars);
 ?>
</div>