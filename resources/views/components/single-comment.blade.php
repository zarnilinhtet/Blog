     @props(['comment'])
     <div class="d-flex flex-start my-4">
         <img class="rounded-circle shadow-1-strong me-3" src="{{ $comment->author->avatar }}" alt="avatar" width="60"
             height="60" />
         <div>
             <h6 class="fw-bold mb-1">{{ $comment->author->name }}</h6>
             <div class="d-flex align-items-center mb-3">
                 <p class="mb-0">
                     {{ $comment->created_at->format('F j, Y, g:i a') }}

                 </p>

             </div>
             <p class="mb-0">
                 {{ $comment->body }}
             </p>
         </div>
     </div>
