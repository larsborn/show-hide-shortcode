jQuery(document).ready(function ($) {
    function removeEmptyChildren($tag) {
        $tag.children().each((i, p) => {
            const $p = $(p);
            if ($p.text().length === 0) {
                $p.remove();
            }
        });
    }

    $('.showhideshortcode-content>p>a').each((i, a) => {
        const $a = $(a);
        $a.on('click', () => {
            const divs = $($a.parent().parent()).find('div');
            if (divs.length !== 1) return;
            let isHidden = divs[0].style.display === 'none';
            $a.text(isHidden ? $a.data('hide-caption') : $a.data('show-caption'));
            let $div = $(divs[0]);
            removeEmptyChildren($div);
            $div.css({display: isHidden ? 'contents' : 'none'});
        });
    });
});
