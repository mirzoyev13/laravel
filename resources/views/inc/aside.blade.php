@if(Request::is('/'))
@section('aside')

<div class="aside">
    <h4>Side panel</h4>
    <h6 style="text-align: center; font-family: 'American Typewriter'">SP Company</h6>
    <pre class="aside-pre">"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled
        and demoralized by the charms of pleasure of the moment, so blinded by desire,that they cannot foresee the pain
        and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty"
    </pre>
    @show
</div>
@endif
