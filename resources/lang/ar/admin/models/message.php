<?php

return array(

    'does_not_exist' => 'الموديل غير موجود.',
    'no_association' => 'غير مرتبط بنموذج.',
    'no_association_fix' => 'سيؤدي هذا إلى كسر الأمور بطرق غريبة وفظيعة. قم بتعديل هذا الأصل الآن لربطه بنموذج.',
    'assoc_users'	 => 'هذا الموديل مرتبط حاليا بواحد أو أكثر من الأصول ولا يمكن حذفه. يرجى حذف الأصول، ثم محاولة الحذف مرة أخرى. ',


    'create' => array(
        'error'   => 'لم يتم انشاء الموديل، يرجى إعادة المحاولة.',
        'success' => 'تم إنشاء الموديل بنجاح.',
        'duplicate_set' => 'يوجد مسبقا موديل بهذا الاسم، الشركة المصنعة ورقم الموديل.',
    ),

    'update' => array(
        'error'   => 'لم يتم تحديث الموديل، يرجى إعادة المحاولة',
        'success' => 'تم تحديث الموديل بنجاح.',
    ),

    'delete' => array(
        'confirm'   => 'هل تريد بالتأكيد حذف موديل الأصل هذا؟',
        'error'   => 'حدثت مشكلة أثناء حذف الموديل. حاول مرة اخرى.',
        'success' => 'تم حذف الموديل بنجاح.'
    ),

    'restore' => array(
        'error'   		=> 'لم تتم استعادة الموديل، يرجى إعادة المحاولة',
        'success' 		=> 'تم إستعادة الموديل بنجاح.'
    ),

    'bulkedit' => array(
        'error'   		=> 'لم يتم تغيير أي حقول، لذلك لم يتم تحديث أي شيء.',
        'success' 		=> 'Model successfully updated. |:model_count models successfully updated.',
        'warn'          => 'You are about to update the properies of the following model: |You are about to edit the properties of the following :model_count models:',

    ),

    'bulkdelete' => array(
        'error'   		    => 'لم يتم اختيار أي موديلات، لذلك لم يتم حذف أي شيء.',
        'success' 		    => 'Model deleted!|:success_count models deleted!',
        'success_partial' 	=> 'تم حذف:success_count: من الموديلات، ومع ذلك تعذر حذف fail_count: نظرًا لأنها لا تزال تحتوي على أصول مقترنة بها.'
    ),

);
