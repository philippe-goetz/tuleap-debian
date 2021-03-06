<?php
/**
 * Copyright (c) Enalean, 2012. All Rights Reserved.
 *
 * This file is a part of Tuleap.
 *
 * Tuleap is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * Tuleap is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Tuleap. If not, see <http://www.gnu.org/licenses/>.
 */

require_once 'Column.class.php';
require_once 'Mapping.class.php';
require_once 'MappingCollection.class.php';

/**
 * Build from a SB field bunch of columns to display in cardwall
 */
class Cardwall_ColumnFactory {

    /**
     * @var Tracker_FormElement_Field_Selectbox
     */
    private $field;

    /**
     * @var array of Cardwall_Column
     */
    private $columns = array();

    public function __construct(Tracker_FormElement_Field_Selectbox $field = null) {
        $this->field = $field;
    }

    /**
     * @return array of Cardwall_Column
     */
    public function getColumns() {
        if ($this->columns) return $this->columns;
        if (! $this->field) return array();

        $values        = $this->field->getVisibleValuesPlusNoneIfAny();
        $decorators    = $this->field->getBind()->getDecorators();
        $this->columns = array();
        foreach ($values as $value) {
            list($bgcolor, $fgcolor) = $this->getColumnColors($value, $decorators);
            $this->columns[]         = new Cardwall_Column((int)$value->getId(), $value->getLabel(), $bgcolor, $fgcolor);
        }
        return $this->columns;
    }

    /**
     * Get the column/field/value mappings
     *
     * @param array $fields array of Tracker_FormElement_Field_Selectbox
     *
     * @return Cardwall_MappingCollection
     */
    public function getMappings($fields) {
        $columns  = $this->getColumns();
        $mappings = new Cardwall_MappingCollection();
        foreach ($fields as $status_field) {
            foreach ($status_field->getVisibleValuesPlusNoneIfAny() as $value) {
                foreach ($columns as $column) {
                    if ($column->label == $value->getLabel()) {
                        $mappings->add(new Cardwall_Mapping($column->id, $status_field->getId(), $value->getId()));
                    }
                }
            }
        }
        return $mappings;
    }

    private function getColumnColors($value, $decorators) {
        $id      = (int)$value->getId();
        $bgcolor = 'white';
        $fgcolor = 'black';
        if (isset($decorators[$id])) {
            $bgcolor = $decorators[$id]->css($bgcolor);
            //choose a text color to have right contrast (black on dark colors is quite useless)
            $fgcolor = $decorators[$id]->isDark($fgcolor) ? 'white' : 'black';
        }
        return array($bgcolor, $fgcolor);
    }
}
?>
