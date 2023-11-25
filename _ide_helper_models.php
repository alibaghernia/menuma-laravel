<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\CafeRestaurant
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property string $logo_path
 * @property string|null $banner_path
 * @property string $slug
 * @property string $status
 * @property mixed|null $social_media
 * @property mixed|null $working_hours
 * @property string|null $address
 * @property string|null $location_lat
 * @property string|null $location_long
 * @property string|null $description
 * @method static \Illuminate\Database\Eloquent\Builder|CafeRestaurant newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CafeRestaurant newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CafeRestaurant query()
 * @method static \Illuminate\Database\Eloquent\Builder|CafeRestaurant whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CafeRestaurant whereBannerPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CafeRestaurant whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CafeRestaurant whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CafeRestaurant whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CafeRestaurant whereLocationLat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CafeRestaurant whereLocationLong($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CafeRestaurant whereLogoPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CafeRestaurant whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CafeRestaurant whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CafeRestaurant whereSocialMedia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CafeRestaurant whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CafeRestaurant whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CafeRestaurant whereWorkingHours($value)
 */
	class CafeRestaurant extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Category
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property string|null $background_path
 * @property int $cafe_restaurant_id
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereBackgroundPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCafeRestaurantId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
 */
	class Category extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Item
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property string|null $description
 * @property string|null $image_path
 * @property mixed|null $tags
 * @property mixed|null $prices
 * @property int|null $category_id
 * @property int $cafe_restaurant_id
 * @method static \Illuminate\Database\Eloquent\Builder|Item newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Item newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Item query()
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereCafeRestaurantId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereImagePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item wherePrices($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereTags($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereUpdatedAt($value)
 */
	class Item extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string|null $family
 * @property string $mobile_number
 * @property mixed $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $cafe_restaurant_id
 * @property-read \App\Models\CafeRestaurant|null $CafeRestaurant
 * @property-read mixed $full_name
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCafeRestaurantId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFamily($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereMobileNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent implements \Filament\Models\Contracts\FilamentUser, \Filament\Models\Contracts\HasAvatar, \Filament\Models\Contracts\HasName {}
}

