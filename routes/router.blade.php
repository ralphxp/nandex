<?php

use Codx\Comic\HomeController;

@get("/")
    @controller("HomeController@index")
@end

@get("/login")
    @controller("AuthController@login")
@end

@get("/login/admin")
    @controller("AuthController@loginAdmin")
@end

@post("/login")
    @controller("AuthController@auth")
@end
@post("/login/admin")
    @controller("AuthController@authAdmin")
@end

@post("/logout")
    @controller("AuthController@logout")
@end



@get("/register")
    @controller("AuthController@register")
@end
@post("/register")
    @controller("AuthController@createUser")
@end

@auth
    @get("/home")
        @controller("HomeController@index")
    @end
    @get("/apply")
        @controller("HomeController@apply")
    @end
    @post("/apply")
        @controller("HomeController@book")
    @end
    @get("/dashboard")
        @controller("HomeController@dashboard")
    @end
    @post('/approve')
        @controller('HomeController@approveBooking')
    @end
    @get('/applications/{id}')
        @controller('HomeController@viewApp')
    @end

    @get('/students')
        @controller('HomeController@students')
    @end
    @get('/student/{id}')
        @controller('HomeController@student')
    @end

    @get('/allocations')
        @controller('HomeController@allocation')
    @end
    @post('/allocations')
        @controller('HomeController@storeAllocation')
    @end
@endauth
