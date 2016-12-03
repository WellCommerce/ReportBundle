<?php
/*
 * WellCommerce Open-Source E-Commerce Platform
 *
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */

namespace WellCommerce\Bundle\ReportBundle\Controller\Admin;

use Symfony\Component\HttpFoundation\Response;
use WellCommerce\Bundle\CoreBundle\Controller\Admin\AbstractAdminController;

/**
 * Class SalesReportController
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class SalesReportController extends AbstractAdminController
{
    public function indexAction(): Response
    {
        return $this->displayTemplate('index');
    }
}
