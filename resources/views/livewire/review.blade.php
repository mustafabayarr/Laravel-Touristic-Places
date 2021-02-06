<div>
    {{-- Because she competes with no one, no one can compete with her. --}}

    @if(session()->has('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
    @endif
    <form class="form-contact comment_form" wire:submit.prevent="store" id="commentForm">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                                 <textarea class="form-control w-100" name="comment" wire:model="review" cols="30"
                                           rows="9"
                                           placeholder="Write Review"></textarea>
                    @error('review')<span class="text-danger">{{$message}}</span>@enderror
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <input class="form-control" wire:model="subject" id="website" type="text"
                           placeholder="Subject">
                    @error('subject')<span class="text-danger">{{$message}}</span>@enderror

                </div>
            </div>
        </div>
        <div class="form-group">
            @auth
                <button type="submit" class="button button-contactForm btn_1 boxed-btn">Send Message
                </button>
            @elseauth
                <a class="button button-contactForm btn_1 boxed-btn" href="{{route('admin_login')}}"> For submit Review
                    Login</a>
            @endauth
        </div>
    </form>
</div>
