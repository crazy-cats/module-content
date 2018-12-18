<?php

/*
 * Copyright © 2018 CrazyCat, Inc. All rights reserved.
 * See COPYRIGHT.txt for license details.
 */

namespace CrazyCat\Cms\Block\Backend\Page;

use CrazyCat\Core\Model\Source\Stage as SourceStage;
use CrazyCat\Core\Model\Source\YesNo as SourceYesNo;

/**
 * @category CrazyCat
 * @package CrazyCat\Cms
 * @author Bruce Z <152416319@qq.com>
 * @link http://crazy-cat.co
 */
class Grid extends \CrazyCat\Core\Block\Backend\AbstractGrid {

    const BOOKMARK_KEY = 'cms_page';

    /**
     * @return array
     */
    public function getFields()
    {
        return [
                [ 'ids' => true, ],
                [ 'name' => 'id', 'label' => __( 'ID' ), 'sort' => true, 'width' => 100, 'filter' => [ 'type' => 'text', 'condition' => 'eq' ] ],
                [ 'name' => 'title', 'label' => __( 'Page Title' ), 'sort' => true, 'filter' => [ 'type' => 'text', 'condition' => 'like' ] ],
                [ 'name' => 'identifier', 'label' => __( 'Identifier' ), 'sort' => true, 'filter' => [ 'type' => 'text', 'condition' => 'like' ] ],
                [ 'name' => 'stage_ids', 'label' => __( 'Stages' ), 'sort' => true, 'width' => 200, 'filter' => [ 'type' => 'select', 'source' => SourceStage::class, 'condition' => 'eq' ] ],
                [ 'name' => 'enabled', 'label' => __( 'Enabled' ), 'sort' => true, 'width' => 130, 'filter' => [ 'type' => 'select', 'source' => SourceYesNo::class, 'condition' => 'eq' ] ],
                [ 'label' => __( 'Actions' ), 'actions' => [
                        [ 'name' => 'edit', 'label' => __( 'Edit' ), 'url' => getUrl( 'cms/page/edit' ) ],
                        [ 'name' => 'delete', 'label' => __( 'Delete' ), 'confirm' => __( 'Sure you want to remove this item?' ), 'url' => getUrl( 'cms/page/delete' ) ]
                ] ] ];
    }

    /**
     * @return string
     */
    public function getSourceUrl()
    {
        return getUrl( 'cms/page/grid' );
    }

}
