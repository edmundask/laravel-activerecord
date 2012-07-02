# PHP.ActiveRecord ORM Bundle for Laravel

This bundle implements [PHP.ActiveRecord ORM](http://www.phpactiverecord.org/) based on [ActiveRecord](http://en.wikipedia.org/wiki/Active_record_pattern) pattern.

Those who have used [Ruby on Rails](http://rubyonrails.org/) will appreciate this ORM as it was inspired by RoR's ActiveRecord implementation.

# Installation

The installation is pretty straight-forward.

Using Laravel's artisan:

	php artisan bundle:install activerecord

Then in your `application/bundles.php`:

	return array('activerecord' => array('auto' => true));

Finally, set up your database connections in `application/database.php`.

# Configuration

In the configuration file (`(:bundle)/config/config.php`) you can set the path to the models directory:

	'models_dir'			=>	path('app').'models'

# Usage

A simple model example:

	<?php
	class User extends ActiveRecord\Model
	{

	}

To learn more, head to [PHP.ActiveRecord wiki](http://www.phpactiverecord.org/projects/main/wiki)

---

## License

Copyright (c) 2012 Edmundas Kondrašovas.

### PHP.ActiveRecord

Copyright (c) 2009-2012

AUTHORS:
- Kien La
- Jacques Fuentes

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
