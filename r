
  GET|HEAD   / .................................................................................................................... filament.cafeRestaurant.pages.dashboard ΓÇ║ Filament\Pages ΓÇ║ Dashboard
  POST       _ignition/execute-solution .................................................................................. ignition.executeSolution ΓÇ║ Spatie\LaravelIgnition ΓÇ║ ExecuteSolutionController
  GET|HEAD   _ignition/health-check .............................................................................................. ignition.healthCheck ΓÇ║ Spatie\LaravelIgnition ΓÇ║ HealthCheckController
  POST       _ignition/update-config ........................................................................................... ignition.updateConfig ΓÇ║ Spatie\LaravelIgnition ΓÇ║ UpdateConfigController
  GET|HEAD   api/cafe-restaurants/{slug} .................................................................................................................................... Api\CafeRestaurant@profile
  GET|HEAD   api/cafe-restaurants/{slug}/menu .................................................................................................................................. Api\CafeRestaurant@menu
  GET|HEAD   api/cafe-restaurants/{slug}/menu/categories ................................................................................................................. Api\CafeRestaurant@categories
  GET|HEAD   api/cafe-restaurants/{slug}/menu/categories/{categoryId} ...................................................................................................... Api\CafeRestaurant@category
  GET|HEAD   api/cafe-restaurants/{slug}/menu/items/{itemid} ................................................................................................................... Api\CafeRestaurant@item
  GET|HEAD   api/cafe-restaurants/{slug}/menu/specials ......................................................................................................................... Api\CafeRestaurant@item
  GET|HEAD   categories ............................................... filament.cafeRestaurant.resources.categories.index ΓÇ║ App\Filament\CafeRestaurant\Resources\CategoryResource\Pages\ListCategories
  GET|HEAD   categories/create ....................................... filament.cafeRestaurant.resources.categories.create ΓÇ║ App\Filament\CafeRestaurant\Resources\CategoryResource\Pages\CreateCategory
  GET|HEAD   categories/{record}/edit .................................... filament.cafeRestaurant.resources.categories.edit ΓÇ║ App\Filament\CafeRestaurant\Resources\CategoryResource\Pages\EditCategory
  GET|HEAD   items .................................................................. filament.cafeRestaurant.resources.items.index ΓÇ║ App\Filament\CafeRestaurant\Resources\ItemResource\Pages\ListItems
  GET|HEAD   items/create ......................................................... filament.cafeRestaurant.resources.items.create ΓÇ║ App\Filament\CafeRestaurant\Resources\ItemResource\Pages\CreateItem
  GET|HEAD   items/{record}/edit ...................................................... filament.cafeRestaurant.resources.items.edit ΓÇ║ App\Filament\CafeRestaurant\Resources\ItemResource\Pages\EditItem
  GET|HEAD   livewire/livewire.js .......................................................................................................... Livewire\Mechanisms ΓÇ║ FrontendAssets@returnJavaScriptAsFile
  GET|HEAD   livewire/preview-file/{filename} ................................................................................. livewire.preview-file ΓÇ║ Livewire\Features ΓÇ║ FilePreviewController@handle
  POST       livewire/update ....................................................................................................... livewire.update ΓÇ║ Livewire\Mechanisms ΓÇ║ HandleRequests@handleUpdate
  POST       livewire/upload-file ............................................................................................... livewire.upload-file ΓÇ║ Livewire\Features ΓÇ║ FileUploadController@handle
  GET|HEAD   login ......................................................................................... filament.cafeRestaurant.auth.login ΓÇ║ App\Filament\CafeRestaurant\Pages\Authentication\Login
  POST       logout ............................................................................................................. filament.cafeRestaurant.auth.logout ΓÇ║ Filament\Http ΓÇ║ LogoutController
  GET|HEAD   profile ......................................................................................... filament.cafeRestaurant.pages.profile ΓÇ║ App\Filament\CafeRestaurant\Pages\Setting\Profile
  GET|HEAD   sanctum/csrf-cookie ..................................................................................................... sanctum.csrf-cookie ΓÇ║ Laravel\Sanctum ΓÇ║ CsrfCookieController@show
  GET|HEAD   superadmin ............................................................................................................... filament.superadmin.pages.dashboard ΓÇ║ Filament\Pages ΓÇ║ Dashboard
  GET|HEAD   superadmin/cafe-restaurants ..................... filament.superadmin.resources.cafe-restaurants.index ΓÇ║ App\Filament\Superadmin\Resources\CafeRestaurantResource\Pages\ListCafeRestaurants
  GET|HEAD   superadmin/cafe-restaurants/create ............ filament.superadmin.resources.cafe-restaurants.create ΓÇ║ App\Filament\Superadmin\Resources\CafeRestaurantResource\Pages\CreateCafeRestaurant
  GET|HEAD   superadmin/cafe-restaurants/{record}/edit ......... filament.superadmin.resources.cafe-restaurants.edit ΓÇ║ App\Filament\Superadmin\Resources\CafeRestaurantResource\Pages\EditCafeRestaurant
  GET|HEAD   superadmin/categories ............................................ filament.superadmin.resources.categories.index ΓÇ║ App\Filament\Superadmin\Resources\CategoryResource\Pages\ListCategories
  GET|HEAD   superadmin/categories/create .................................... filament.superadmin.resources.categories.create ΓÇ║ App\Filament\Superadmin\Resources\CategoryResource\Pages\CreateCategory
  GET|HEAD   superadmin/categories/{record}/edit ................................. filament.superadmin.resources.categories.edit ΓÇ║ App\Filament\Superadmin\Resources\CategoryResource\Pages\EditCategory
  GET|HEAD   superadmin/items ............................................................... filament.superadmin.resources.items.index ΓÇ║ App\Filament\Superadmin\Resources\ItemResource\Pages\ListItems
  GET|HEAD   superadmin/items/create ...................................................... filament.superadmin.resources.items.create ΓÇ║ App\Filament\Superadmin\Resources\ItemResource\Pages\CreateItem
  GET|HEAD   superadmin/items/{record}/edit ................................................... filament.superadmin.resources.items.edit ΓÇ║ App\Filament\Superadmin\Resources\ItemResource\Pages\EditItem
  GET|HEAD   superadmin/login ...................................................................................... filament.superadmin.auth.login ΓÇ║ App\Filament\Superadmin\Pages\Authentication\Login
  POST       superadmin/logout ...................................................................................................... filament.superadmin.auth.logout ΓÇ║ Filament\Http ΓÇ║ LogoutController
  GET|HEAD   superadmin/managers ................................................... filament.superadmin.resources.managers.index ΓÇ║ App\Filament\Superadmin\Resources\ManagerResource\Pages\ListManagers
  GET|HEAD   superadmin/managers/create .......................................... filament.superadmin.resources.managers.create ΓÇ║ App\Filament\Superadmin\Resources\ManagerResource\Pages\CreateManager
  GET|HEAD   superadmin/managers/{record}/edit ....................................... filament.superadmin.resources.managers.edit ΓÇ║ App\Filament\Superadmin\Resources\ManagerResource\Pages\EditManager
  GET|HEAD   superadmin/users ............................................................... filament.superadmin.resources.users.index ΓÇ║ App\Filament\Superadmin\Resources\UserResource\Pages\ListUsers
  GET|HEAD   superadmin/users/create ...................................................... filament.superadmin.resources.users.create ΓÇ║ App\Filament\Superadmin\Resources\UserResource\Pages\CreateUser
  GET|HEAD   superadmin/users/{record}/edit ................................................... filament.superadmin.resources.users.edit ΓÇ║ App\Filament\Superadmin\Resources\UserResource\Pages\EditUser
  GET|HEAD   t ......................................................................................................................................................................................... 

                                                                                                                                                                                     Showing [43] routes

