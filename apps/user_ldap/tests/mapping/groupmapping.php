<?php
/**
 * @author Arthur Schiwon <blizzz@owncloud.com>
 * @author Morris Jobke <hey@morrisjobke.de>
 * @author Thomas Müller <thomas.mueller@tmit.eu>
 *
 * @copyright Copyright (c) 2016, ownCloud, Inc.
 * @license AGPL-3.0
 *
 * This code is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License, version 3,
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License, version 3,
 * along with this program.  If not, see <http://www.gnu.org/licenses/>
 *
 */

namespace OCA\user_ldap\tests\mapping;

use OCA\User_LDAP\Mapping\GroupMapping;

/**
 * Class Test_GroupMapping
 *
 * @group DB
 *
 * @package OCA\user_ldap\tests\mapping
 */
class Test_GroupMapping extends AbstractMappingTest {
	public function getMapper(\OCP\IDBConnection $dbMock) {
		return new GroupMapping($dbMock);
	}
}