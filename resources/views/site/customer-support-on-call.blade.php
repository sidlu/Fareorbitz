@include('site.header')
<style>
    @media(min-width:768px) {
        .popup-bg {
            display: none;
        }
    }

    @media(max-width:768px) {
        .popup-bg {
            background: none;
            height: auto;
            margin-bottom: 20px;
            padding: 50px 0 20px;
        }

        .ownmodal-title2 {
            font-size: 35px;
            padding: 8px 0px 0;
        }

        .ownmodal2 .modal-prgh1 {
            font-size: 22px;
            padding: 5px;
            font-weight: 600;
            text-align: center;
            line-height: 1.5;
        }

        .ownmodal2 .modal-prgh2 {
            font-size: 18px;
            padding: 5px;
        }

        @keyframes wiggle {

            0%,
            7% {
                transform: rotateZ(0);
            }

            15% {
                transform: rotateZ(-15deg);
            }

            20% {
                transform: rotateZ(10deg);
            }

            25% {
                transform: rotateZ(-10deg);
            }

            30% {
                transform: rotateZ(6deg);
            }

            35% {
                transform: rotateZ(-4deg);
            }

            40%,
            100% {
                transform: rotateZ(0);
            }
        }

        @keyframes glow {
            0% {
                box-shadow: 5px 5px 20px rgba(93, 52, 168, 0.6), -5px -5px 20px rgba(93, 52, 168, 0.6);
            }

            50% {
                box-shadow: 5px 5px 20px rgba(81, 224, 210, 0.6), -5px -5px 20px rgba(81, 224, 210, 0.6)
            }

            100% {
                box-shadow: 5px 5px 20px rgba(93, 52, 168, 0.6), -5px -5px 20px rgba(93, 52, 168, 0.6)
            }
        }

        .ownmodal-callicon2 {
            width: auto;
            height: 60px;
            margin: 15px auto 0;
            font-size: 15px;
            border-radius: 52px;
            padding: 15px 0;
            animation: glow 1s infinite;
        }

        .ownmodal-callicon2 i {
            animation: wiggle 1s linear infinite;
            font-size: 30px;
        }

        .ownmodal-callicon2 {
            border: 3px solid var(--color-3);
        }

        .ownmodal-tollfree2 {
            font-size: 18px;
            width: 100%;
            border: none;
            position: fixed;
            z-index: 999;
            bottom: 0;
            margin: 0;
            border: 3px solid var(--color-3);
        }

        .orange-text {
            color: var(--color-3) !important;
        }

        .bg-call {
            background: var(--color-1);
        }
    }

    .fill-1 {
        animation: fill 6s linear 1;
    }

    @keyframes fill {
        0% {
            width: 0%;
        }

        100% {
            width: 100%;
        }
    }

    .progress {
        --bs-progress-height: 1rem;
        --bs-progress-font-size: 0.75rem;
        --bs-progress-bg: #e9ecef;
        --bs-progress-border-radius: 0.375rem;
        --bs-progress-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.075);
        --bs-progress-bar-color: #fff;
        --bs-progress-bar-bg: #0a58ca;
        --bs-progress-bar-transition: width 0.6s ease;
        display: flex;
        height: var(--bs-progress-height);
        overflow: hidden;
        font-size: var(--bs-progress-font-size);
        background-color: var(--bs-progress-bg);
        border-radius: var(--bs-progress-border-radius);
    }

    .progress-bar {
        display: flex;
        flex-direction: column;
        justify-content: center;
        overflow: hidden;
        color: var(--bs-progress-bar-color);
        text-align: center;
        white-space: nowrap;
        background-color: var(--bs-progress-bar-bg);
        transition: var(--bs-progress-bar-transition);
    }
</style>
<div class="popup-bg padding-top-30px">
    <div class="ownmodal2" style="z-index: inherit;">
        <a href="tel:{{ $contact ? $contact : '+1-888-926-8555' }}" class="call-screen" id="call">
            <div style="padding:20px;" class="text-center">
                <img src="{{ asset('images/telecaller.jpg') }}" class="mb-3" alt="call" style="border-radius: 50%;" />
                <p class="modal-prgh1 text-uppercase text-success text-uppercase pb-3">Connecting you to our <br /> Customer service executive</p>
                <div class="pb-2 pt-3 px-3">
                    <div class="progress">
                        <div class="progress-bar fill-1 progress-bar-striped  progress-bar-animated" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                    <p class="text-center text-muted">Please wait...</p>
                </div>
                <h3 class="ownmodal-title2 text-center orange-text my-3">Un-Published Fares</h3>
                <p class="modal-prgh2 text-center">Saved For Our Callers</p>

                <p class="modal-prgh1 text-dark py-3">New Reservations, Changes, Cancellations & Customer Service </p>
                <p class="ownmodal-callicon2"><i class="la la-phone"></i>&nbsp; Call {{ $airline }} Customer Support</p>
            </div>
            <div>
                <p class="ownmodal-tollfree2 bg-call text-white"><i class="la la-phone"></i>{{ $contact ? $contact : '+1-888-926-8555' }}</p>
            </div>
        </a>
    </div>
</div>
@include('site.footer')
<script>
    $('.progress-bar-fill').delay(6000).queue(function() {
        $(this).css('width', '100%');
    });
    if (window.matchMedia("(max-width: 768px)").matches) {
        setTimeout(function() {
            document.getElementById("call").click();
        }, 6000);
    }
</script>