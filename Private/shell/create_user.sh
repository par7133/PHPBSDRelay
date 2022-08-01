#!/bin/sh
#
# Copyright (c) 2016, 2024, 5 Mode
# All rights reserved.
#  
# This file is part of PHPBSDRelay.
# 
# PHPBSDRelay is free software: you can redistribute it and/or modify
#  it under the terms of the GNU General Public License as published by
#  the Free Software Foundation, either version 3 of the License, or
#  (at your option) any later version.
# 
#  PHPBSDRelay is distributed in the hope that it will be useful,
#  but WITHOUT ANY WARRANTY; without even the implied warranty of
#  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
#  GNU General Public License for more details.
# 
#  You should have received a copy of the GNU General Public License
#  along with PHPBSDRelay. If not, see <https://www.gnu.org/licenses/>.s

useradd -g _PHPBSDRelay -u 555 -L daemon -s /sbin/nologin -d /var/www/PHPBSDRelay _PHPBSDRelay
