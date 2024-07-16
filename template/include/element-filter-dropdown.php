<fieldset class="filter-dropdown animate fadeIn <?php echo $filter_name == "sort by" ? "sort-by-dropdown" : "" ?>">
    <legend class="filter-dropdown-trigger">
        <p class="size-subtitle1"><?php echo $filter_name ?></p>
        <span class="ic ic-chevron-down size-icon-xs"></span>
    </legend>
    <div class="filter-dropdown-options <?php echo $filter_name == "sort by" ? "sort-by" : "" ?>">
        <div class="options">
            <?php foreach ($filter_options as $option) : ?>
                <label class="option size-subtitle2" for="<?php echo $option; ?>" id="label-<?php echo $option; ?>"><?php echo $option; ?>
                    <input type="<?php echo $filter_name == "sort by" ? "radio" : "checkbox" ?>" id="<?php echo $option ?>" name="<?php echo $filter_name ?>" value="<?php echo $option ?>" />
                </label>
            <?php endforeach; ?>
        </div>

    </div>
</fieldset>