<div class="filter-dropdown animate fadeIn">
    <div class="filter-dropdown-trigger">
        <p class="size-subtitle1"><?php echo $filter_name ?></p>
        <span class="ic ic-chevron-down size-icon-xs"></span>
    </div>
    <div class="filter-dropdown-options <?php echo $filter_name == "sort by" ? "sort-by" : "" ?>">
        <div class="options">
            <?php foreach ($filter_options as $option) : ?>
                <div class="size-subtitle2 option">
                    <?php echo $option; ?>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</div>