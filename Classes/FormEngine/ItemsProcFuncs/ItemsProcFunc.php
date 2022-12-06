<?php

declare(strict_types=1);
namespace Sypets\SypetsExample\FormEngine\ItemsProcFuncs;

class ItemsProcFunc
{
    /**
     * Return items for field pages.uniol_hide_subnavigation.
     *
     * If a page has subpages of subpages, selecting Projectnavigation should not be possible.
     * the item will be unset.
     *
     * @param array $configuration Current field configuration
     * @throws \UnexpectedValueException
     * @internal
     */
    public function getItemsForPagesHideSubnavigation(array &$configuration): void
    {
        if ($configuration['table'] !== 'pages' || $configuration['field'] !== 'hide_subnavigation') {
            // wrong table or field (should not happen)
            return;
        }
        if (!isset($configuration['row']['uid'])) {
            // no uid yet, probably page being created, no need to check!
            return;
        }
        $pageUid = (int)$configuration['row']['uid'];

        $configuration['items'][] = [
            'another item ... (page uid=' . $pageUid . ')',
            ''
        ];

    }
}
