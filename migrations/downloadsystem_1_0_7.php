<?php
/**
*
* @package phpBB Extension - Download System
* @copyright (c) 2016 dmzx - https://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\downloadsystem\migrations;

class downloadsystem_1_0_7 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return [
			'\dmzx\downloadsystem\migrations\downloadsystem_1_0_6',
		];
	}

	public function update_data()
	{
		return [
			// Update config
			['config.update', ['download_system_version', '1.0.7']],
		];
	}

	public function update_schema()
	{
		return [
			'add_columns'	=> [
				$this->table_prefix . 'dm_eds_cat'		=> [
					'cat_name_show'		=> ['TINT:1', 0],
				],
			],
		];
	}
}
