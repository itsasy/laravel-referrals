<div class="input-group mt-2">
    <input type="text" class="form-control" id="referral_link" readonly
           value="{{$referral_link}}">

    <div class="input-group-append">
        <button class="btn btn-sm btn-primary" id="copy_referral_link">
            <i class="fa fa-copy"></i> Copy
        </button>
    </div>
</div>


@push('scripts')
    <script>
        const copyButton = document.getElementById('copy_referral_link');

        copyButton.addEventListener('click', (e) =>{
            const input = document.getElementById('referral_link');
            //Select the input
            input.select();

            //For devices
            input.setSelectionRange(0,99999);

            //Copy
            document.execCommand('copy');
            alert('Your referral link has been copied: ' + input.value);
        });

    </script>
@endpush
