<?php
/**
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Dcat\Admin\Traits\HasDateTimeFormatter;

class BaseModel extends Model
{
    use HasDateTimeFormatter;

    const STATUS_OPEN = 1; // 
    const STATUS_CLOSE = 0; // 

    const AUTOMATIC_DELIVERY = 1; // 
    const MANUAL_PROCESSING = 2; // 


}
