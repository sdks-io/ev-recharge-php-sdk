
# Location Marker

## Data Type

`SingleLocationMarker|MultiLocationMarker`

## Cases

| Type |
|  --- |
| [`SingleLocationMarker`](../../../doc/models/single-location-marker.md) |
| [`MultiLocationMarker`](../../../doc/models/multi-location-marker.md) |

## SingleLocationMarker

### Initialization Code

#### Example

```php
$value = SingleLocationMarkerBuilder::init(
    'SingleLocation'
)
    ->uniqueKey('2057411_1')
    ->status(SingleLocationMarkerStatusEnum::AVAILABLE)
    ->evseCount(12)
    ->maxPower(42)
    ->geoHash('sx')
    ->locationUid(2057411)
    ->operatorId('AT-HTB')
    ->build();
```

## MultiLocationMarker

### Initialization Code

#### Example

```php
$value = MultiLocationMarkerBuilder::init(
    'MultiLocation'
)
    ->uniqueKey('2060319_6')
    ->locationCount(6)
    ->evseCount(10)
    ->maxPower(42)
    ->geoHash('sx')
    ->build();
```

