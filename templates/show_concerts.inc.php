<?php
/* vim:set softtabstop=4 shiftwidth=4 expandtab: */
/**
 *
 * LICENSE: GNU General Public License, version 2 (GPLv2)
 * Copyright 2001 - 2015 Ampache.org
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License v2
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 *
 */
?>
<?php UI::show_box_top(T_('Coming Events'), 'info-box'); ?>
<table class="tabledata" cellpadding="0" cellspacing="0">
    <thead>
        <tr class="th-top">
            <th class="cel_date"><?php echo T_('Date'); ?></th>
            <th class="cel_place"><?php echo T_('Place'); ?></th>
            <th class="cel_location"><?php echo T_('Location'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($coming_concerts as $libitem) {
        ?>
        <tr id="concert_<?php echo $libitem->id; ?>" class="<?php echo UI::flip_class(); ?>">
            <?php require AmpConfig::get('prefix') . '/templates/show_concert_row.inc.php'; ?>
        </tr>
        <?php } ?>
        <?php if (!$coming_concerts || !count($coming_concerts)) { ?>
        <tr class="<?php echo UI::flip_class(); ?>">
            <td colspan="<?php echo $thcount; ?>"><span class="nodata"><?php echo T_('No coming events found'); ?></span></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
<?php UI::show_box_bottom(); ?>
<?php UI::show_box_top(T_('Past Events'), 'info-box'); ?>
<table class="tabledata" cellpadding="0" cellspacing="0">
    <thead>
        <tr class="th-top">
            <th class="cel_date"><?php echo T_('Date'); ?></th>
            <th class="cel_place"><?php echo T_('Place'); ?></th>
            <th class="cel_location"><?php echo T_('Location'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($concerts as $libitem) {
        ?>
        <tr id="concert_<?php echo $libitem->id; ?>" class="<?php echo UI::flip_class(); ?>">
            <?php require AmpConfig::get('prefix') . '/templates/show_concert_row.inc.php'; ?>
        </tr>
        <?php } ?>
        <?php if (!$concerts || !count($concerts)) { ?>
        <tr class="<?php echo UI::flip_class(); ?>">
            <td colspan="<?php echo $thcount; ?>"><span class="nodata"><?php echo T_('No past events found'); ?></span></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
<?php UI::show_box_bottom(); ?>
