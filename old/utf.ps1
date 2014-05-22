$files = [IO.Directory]::GetFiles("Z:\home\startpolus\www")
foreach($file in $files) 
{     
    $content = get-content -path $file
    $content | out-file $file -encoding utf8    
}
