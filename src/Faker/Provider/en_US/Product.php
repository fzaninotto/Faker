<?php

namespace Faker\Provider\en_US;

class Product extends \Faker\Provider\Product
{
    protected static $adjectives = array(
        'Clean', 'Clear', 'Clever', 'Crazy','Dark', 'Distinguished',
        'Dull', 'Durable', 'Elegant', 'Expensive', 'Fancy',
        'Forgettable', 'Gentle', 'High-class', 'Inexpensive', 'Lackluster',
        'Long', 'Low-class', 'Modern', 'Odd', 'Ordinary', 'Rough', 'Rusty',
        'Second-rate', 'Sharp', 'Shiny', 'Sleek', 'Smart', 'Smooth', 'Solar-powered',
        'Sparkling', 'Strange', 'Tough'
    );

    protected static $adverbs = array(
        'Astonishingly', 'Awesomely', 'Brilliantly', 'Divinely', 'Extra',
        'Excessively', 'Exorbitantly', 'Extremely', 'Fabulously',
        'Generally', 'Gloriously', 'Greatly', 'Impossibly', 'Incredibly',
        'Marvelously', 'Outrageously', 'Outstandingly',
        'Overly', 'Pleasantly', 'Quite', 'Really',
        'Smashingly', 'Stylishly', 'Superbly',
        'Terrifically', 'Underwhelmingly', 'Wildly', 'Wickedly', 'Wonderfully',
    );

    /**
     * Shamelessly copied from Amazon
     */
    protected static $category = array(
        'Appliances', 'Apps and Games', 'Arts, Crafts and Sewing',
        'Automotive Parts and Accessories', 'Baby', 'Beauty and Personal Care', 'Books',
        'CDs and Vinyl', 'Cell Phones and Accessories', 'Clothing, Shoes and Jewelry',
        'Collectibles and Fine Art', 'Computers', 'Courses', 'Credit and Payment Cards',
        'Digital Music', 'Electronics', 'Garden and Outdoor', 'Gift Cards',
        'Grocery and Gourmet Food', 'Handmade', 'Health, Household and Baby Care',
        'Home and Business Services', 'Home and Kitchen', 'Industrial and Scientific',
        'Kindle Store', 'Luggage and Travel Gear', 'Luxury Beauty',
        'Magazine Subscriptions', 'Movies and TV', 'Musical Instruments',
        'Office Products', 'Pet Supplies', 'Prime Exclusive Savings',
        'Prime Pantry', 'Software', 'Sports and Outdoors', 'Tools and Home Improvement',
        'Toys and Games', 'Vehicles', 'Video Games',
    );

    /**
     * See https://en.wikipedia.org/wiki/Outline_of_industry
     */
    protected static $industries = array(
        'Aerospace', 'Agriculture', 'Arms', 'Automotive',
        'Broadcasting', 'Chemical', 'Computer', 'Construction',
        'Defense', 'Direct Selling', 'Education', 'Electrical power',
        'Electronics', 'Energy', 'Entertainment',
        'Film', 'Financial services', 'Fishing', 'Food', 'Fruit production',
        'Health care', 'Hospitality', 'Information', 'Insurance', 'Internet',
        'Manufacturing', 'Mass media', 'Mining', 'Music', 'News media',
        'Petroleum', 'Pharmaceutical', 'Publishing', 'Pulp and paper',
        'Shipbuilding', 'Software', 'Steel',
        'Telecommunications', 'Timber', 'Tobacco', 'Transport', 'Water'
    );

    protected static $materials = array(
        'Aluminum', 'Amoled', 'Bronze', 'Candy', 'Carbon', 'Carbon Fiber',
        'Ceramic', 'Chromium', 'Concrete', 'Copper', 'Cotton', 'Denim', 'Eco',
        'Fiber', 'Fur', 'Glass', 'Granite', 'High Carbon', 'Iron', 'Kevlar',
        'Latex', 'Leather', 'Leather', 'Linen', 'Low Carbon', 'Marbled', 'Metallic',
        'Micro', 'Nylon', 'Paper', 'Plastic', 'Polycarbonate', 'Polyester',
        'Polyurethane', 'Rubberized', 'Sand Blasted', 'Silicone', 'Silk',
        'Spandex', 'Stainless', 'Steel', 'Synthetic', 'Wooden', 'Wool',
    );

    protected static $products = array(
        'Backpack', 'Bag', 'Basin', 'Belt', 'Blender', 'Boots', 'Bottle',
        'Box', 'Calculator', 'Cables', 'Camera', 'Cardigan', 'Carpet',
        'Chair', 'Charger', 'Chinos', 'Clock', 'Coat', 'Desktop Computer',
        'Dishwasher', 'Doorbell', 'Drone', 'Dryer', 'Envelop', 'Espresso Maker',
        'Flashlight', 'Folder', 'Glasses', 'Gloves', 'Handbag', 'Handkerchief',
        'Hat', 'Headset', 'Helmet', 'Humidifier', 'Jacket', 'Jersey', 'Keyboard',
        'Lamp', 'Laptop', 'Mattress', 'Microphone', 'Monitor', 'Mouse', 'Notebook', 'Oven',
        'Pajamas', 'Pants', 'Pen', 'Pencil', 'Phone', 'Purse', 'Radio',
        'Raincoat', 'Refrigerator', 'Scale', 'Scanner', 'Shirt', 'Shoes',
        'Socks', 'Speakers', 'Stapler', 'Stereo', 'Stove', 'Sweater',
        'Table', 'Tablet', 'Tie', 'Toaster', 'TV', 'Umbrella',
        'Undergarment', 'VCR', 'Vest', 'Wallet', 'Walkie-Talkie', 'Watch',
    );

    protected static $shapes = array(
        'Broad', 'Crooked', 'Curved', 'Deep', 'Even', 'Flat',
        'Jagged', 'Round', 'Shallow', 'Spherical', 'Square', 'Steep',
        'Straight', 'Triangular', 'Uneven',
    );

    protected static $sizes = array(
        'Average', 'Big', 'Bulky', 'Compact', 'Fat', 'Gigantic', 'Heavy',
        'Huge', 'Large', 'Light', 'Little', 'Massive', 'Medium',
        'Miniature', 'Narrow', 'Petite', 'Short', 'Skinny', 'Slim',
        'Small', 'Tall', 'Thick', 'Thin', 'Tiny', 'Wide',
    );

    protected static $simpleFormats = array(
        '{{adjective}} {{product}}',
        '{{color}} {{product}}',
        '{{size}} {{product}}',
        '{{shape}} {{product}}',
        '{{material}} {{product}}',
    );

    protected static $fancyFormats = array(
        '{{adjective}} {{material}} {{product}}',
        '{{adjective}} {{shape}} {{product}}',
        '{{adjective}} {{color}} {{product}}',
        '{{size}} {{material}} {{product}}',
        '{{size}} {{shape}} {{product}}',
        '{{size}} {{color}} {{product}}',
    );

    protected static $complexFormats = array(
        '{{adverb}} {{adjective}} {{material}} {{product}}',
        '{{adverb}} {{adjective}} {{shape}} {{product}}',
        '{{adverb}} {{adjective}} {{color}} {{product}}',
        '{{adverb}} {{size}} {{material}} {{product}}',
        '{{adverb}} {{size}} {{shape}} {{product}}',
        '{{adverb}} {{shape}} {{material}} {{product}}',
        '{{adverb}} {{color}} {{material}} {{product}}',
        '{{adverb}} {{color}} {{shape}} {{product}}',
    );

    protected static $elaborateFormats = array(
        '{{adverb}} {{size}} {{adverb}} {{adjective}} {{material}} {{product}}',
        '{{adverb}} {{shape}} {{adverb}} {{adjective}} {{material}} {{product}}',
        '{{adverb}} {{color}} {{adverb}} {{adjective}} {{material}} {{product}}',
        '{{adverb}} {{size}} {{adverb}} {{color}} {{material}} {{product}}',
        '{{adverb}} {{color}} {{adverb}} {{shape}} {{material}} {{product}}',
    );
}
