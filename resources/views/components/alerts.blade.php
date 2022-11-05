<div>
    @php
        if(!isset($type)){
            $type = null;
        }
    @endphp
    @if($type=='success')
    Success : 
    @else
    Failed :
    @endif
    {{$message}}
</div>