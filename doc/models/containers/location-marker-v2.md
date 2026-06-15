
# Location Marker V2

## Data Type

`SingleLocationMarkerV2|MultiLocationMarkerV2`

## Cases

| Type |
|  --- |
| [`SingleLocationMarkerV2`](../../../doc/models/single-location-marker-v2.md) |
| [`MultiLocationMarkerV2`](../../../doc/models/multi-location-marker-v2.md) |

## SingleLocationMarkerV2

### Initialization Code

#### Example

```php
$value = SingleLocationMarkerV2Builder::init()
    ->status(SingleLocationMarkerStatusEnum::AVAILABLE)
    ->evseCount(12)
    ->locationCount(6)
    ->locationUid('2057411')
    ->operatorName('TheNewMotion')
    ->build();
```

## MultiLocationMarkerV2

### Initialization Code

#### Example

```php
$value = MultiLocationMarkerV2Builder::init()
    ->locationCount(6)
    ->evseCount(10)
    ->maxPower(42)
    ->operatorName('TheNewMotion')
    ->build();
```

