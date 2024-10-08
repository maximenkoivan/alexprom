"use strict";
/**
 * Кастомный селект
 */

import 'select2';

class SelectCustom {
    constructor($container) {
        this.init($container)
    }

    init($container){
        $container = $container || document;

        let $select = $container.querySelectorAll('[data-custom-select]');

        if (!$select) return false;

        $select.forEach(($el) => {
            let $self = $el,
                placeholder = $self.getAttribute('data-placeholder'),
                select2Opt = {
                    language: "ru",
                    theme: 'form',
                    width: '100%',
                    search_contains: true,
                    minimumResultsForSearch: 15,
                    placeholder: placeholder ? placeholder : null,
                };

            $($self).select2(select2Opt);
        });
    }
}

export default SelectCustom;