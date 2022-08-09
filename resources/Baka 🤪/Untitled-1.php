
<?php
if ($request->hasFile('file')) 
{ 
    $file = $request->file('avatar');
    $name = $file->getClientOriginalName();
    $size =  $file->getSize();
    $extension = $file->getClientOriginalExtension();
}