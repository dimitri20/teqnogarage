USE teqnogarage;

INSERT INTO categories(category)
VALUES 
	("phones"),
	("tablets"),
    ("laptops"),
    ("computers"),
    ("accessories");
    

INSERT INTO subcategories(categories_id, subcategory)
VALUES
	(1, "Samsung"),
    (1, "Apple"),
    (1, "Google"),
    (1, "LG"),
    (1, "Motorola"),
    (1, "Xiaomi"),
    (1, "Huawei"),
    (2, "Apple"),
    (2, "Samsung"),
    (2, "Lenovo"),
    (3, "Lenovo"),
    (3, "Apple"),
    (3, "HP"),
    (3, "Dell");
    

INSERT INTO products(categories_id, subcategories_id, `name`, video_url, available, price_from, price_to, images_id, description_ka, description_en, description_ru)
VALUES
	(
		1,
        1,
        "Samsung Galaxy S8",
        "https://youtu.be/nNlTNE1y9DM",
        1,
        400,
        460,
        1,
        "Now, back to present time. The LG G6 has been around for some time, and we also asked you to look beyond the diagonal in our Galaxy S8+ review earlier this week. Displays are getting taller and breaking out of the 16:9 box they were trapped in for a few years now. But while LG opted for a square times-two 18:9 ratio, Samsung went with 18.5:9, because why not.Both of this season's premium Galaxies are in this bizarre 2.06:1 aspect, but the regular S8 is petite. It's a millimeter wider than an iPhone 7 with a screen surface of some 40% more than the small-sized Apple (that's real estate, not diagonal, so it isn't apples to oranges). Put the S8 next to an S7 and the new one is actually narrower, and visibly so. So from the get go we'd say that the S8 has the most screen you can get in a phone this size, and even a few sizes up.",
		"Now, back to present time. The LG G6 has been around for some time, and we also asked you to look beyond the diagonal in our Galaxy S8+ review earlier this week. Displays are getting taller and breaking out of the 16:9 box they were trapped in for a few years now. But while LG opted for a square times-two 18:9 ratio, Samsung went with 18.5:9, because why not.Both of this season's premium Galaxies are in this bizarre 2.06:1 aspect, but the regular S8 is petite. It's a millimeter wider than an iPhone 7 with a screen surface of some 40% more than the small-sized Apple (that's real estate, not diagonal, so it isn't apples to oranges). Put the S8 next to an S7 and the new one is actually narrower, and visibly so. So from the get go we'd say that the S8 has the most screen you can get in a phone this size, and even a few sizes up.",
		"Now, back to present time. The LG G6 has been around for some time, and we also asked you to look beyond the diagonal in our Galaxy S8+ review earlier this week. Displays are getting taller and breaking out of the 16:9 box they were trapped in for a few years now. But while LG opted for a square times-two 18:9 ratio, Samsung went with 18.5:9, because why not.Both of this season's premium Galaxies are in this bizarre 2.06:1 aspect, but the regular S8 is petite. It's a millimeter wider than an iPhone 7 with a screen surface of some 40% more than the small-sized Apple (that's real estate, not diagonal, so it isn't apples to oranges). Put the S8 next to an S7 and the new one is actually narrower, and visibly so. So from the get go we'd say that the S8 has the most screen you can get in a phone this size, and even a few sizes up."
	),
    
    (
		1,
        2,
        "Iphone X",
        "https://youtu.be/nNlTNE1y9DM",
        1,
        700,
        800,
        2,
        "Now, back to present time. The LG G6 has been around for some time, and we also asked you to look beyond the diagonal in our Galaxy S8+ review earlier this week. Displays are getting taller and breaking out of the 16:9 box they were trapped in for a few years now. But while LG opted for a square times-two 18:9 ratio, Samsung went with 18.5:9, because why not.Both of this season's premium Galaxies are in this bizarre 2.06:1 aspect, but the regular S8 is petite. It's a millimeter wider than an iPhone 7 with a screen surface of some 40% more than the small-sized Apple (that's real estate, not diagonal, so it isn't apples to oranges). Put the S8 next to an S7 and the new one is actually narrower, and visibly so. So from the get go we'd say that the S8 has the most screen you can get in a phone this size, and even a few sizes up.",
		"Now, back to present time. The LG G6 has been around for some time, and we also asked you to look beyond the diagonal in our Galaxy S8+ review earlier this week. Displays are getting taller and breaking out of the 16:9 box they were trapped in for a few years now. But while LG opted for a square times-two 18:9 ratio, Samsung went with 18.5:9, because why not.Both of this season's premium Galaxies are in this bizarre 2.06:1 aspect, but the regular S8 is petite. It's a millimeter wider than an iPhone 7 with a screen surface of some 40% more than the small-sized Apple (that's real estate, not diagonal, so it isn't apples to oranges). Put the S8 next to an S7 and the new one is actually narrower, and visibly so. So from the get go we'd say that the S8 has the most screen you can get in a phone this size, and even a few sizes up.",
		"Now, back to present time. The LG G6 has been around for some time, and we also asked you to look beyond the diagonal in our Galaxy S8+ review earlier this week. Displays are getting taller and breaking out of the 16:9 box they were trapped in for a few years now. But while LG opted for a square times-two 18:9 ratio, Samsung went with 18.5:9, because why not.Both of this season's premium Galaxies are in this bizarre 2.06:1 aspect, but the regular S8 is petite. It's a millimeter wider than an iPhone 7 with a screen surface of some 40% more than the small-sized Apple (that's real estate, not diagonal, so it isn't apples to oranges). Put the S8 next to an S7 and the new one is actually narrower, and visibly so. So from the get go we'd say that the S8 has the most screen you can get in a phone this size, and even a few sizes up."
	),
    
    (
		1,
        3,
        "Google Pixel a4",
        "https://youtu.be/nNlTNE1y9DM",
        0,
        700,
        1000,
        3,
        "Now, back to present time. The LG G6 has been around for some time, and we also asked you to look beyond the diagonal in our Galaxy S8+ review earlier this week. Displays are getting taller and breaking out of the 16:9 box they were trapped in for a few years now. But while LG opted for a square times-two 18:9 ratio, Samsung went with 18.5:9, because why not.Both of this season's premium Galaxies are in this bizarre 2.06:1 aspect, but the regular S8 is petite. It's a millimeter wider than an iPhone 7 with a screen surface of some 40% more than the small-sized Apple (that's real estate, not diagonal, so it isn't apples to oranges). Put the S8 next to an S7 and the new one is actually narrower, and visibly so. So from the get go we'd say that the S8 has the most screen you can get in a phone this size, and even a few sizes up.",
		"Now, back to present time. The LG G6 has been around for some time, and we also asked you to look beyond the diagonal in our Galaxy S8+ review earlier this week. Displays are getting taller and breaking out of the 16:9 box they were trapped in for a few years now. But while LG opted for a square times-two 18:9 ratio, Samsung went with 18.5:9, because why not.Both of this season's premium Galaxies are in this bizarre 2.06:1 aspect, but the regular S8 is petite. It's a millimeter wider than an iPhone 7 with a screen surface of some 40% more than the small-sized Apple (that's real estate, not diagonal, so it isn't apples to oranges). Put the S8 next to an S7 and the new one is actually narrower, and visibly so. So from the get go we'd say that the S8 has the most screen you can get in a phone this size, and even a few sizes up.",
		"Now, back to present time. The LG G6 has been around for some time, and we also asked you to look beyond the diagonal in our Galaxy S8+ review earlier this week. Displays are getting taller and breaking out of the 16:9 box they were trapped in for a few years now. But while LG opted for a square times-two 18:9 ratio, Samsung went with 18.5:9, because why not.Both of this season's premium Galaxies are in this bizarre 2.06:1 aspect, but the regular S8 is petite. It's a millimeter wider than an iPhone 7 with a screen surface of some 40% more than the small-sized Apple (that's real estate, not diagonal, so it isn't apples to oranges). Put the S8 next to an S7 and the new one is actually narrower, and visibly so. So from the get go we'd say that the S8 has the most screen you can get in a phone this size, and even a few sizes up."
	),
    
    (
		2,
        1,
        "Yoga",
        "https://youtu.be/nNlTNE1y9DM",
        1,
        1000,
        1200,
        4,
        "Now, back to present time. The LG G6 has been around for some time, and we also asked you to look beyond the diagonal in our Galaxy S8+ review earlier this week. Displays are getting taller and breaking out of the 16:9 box they were trapped in for a few years now. But while LG opted for a square times-two 18:9 ratio, Samsung went with 18.5:9, because why not.Both of this season's premium Galaxies are in this bizarre 2.06:1 aspect, but the regular S8 is petite. It's a millimeter wider than an iPhone 7 with a screen surface of some 40% more than the small-sized Apple (that's real estate, not diagonal, so it isn't apples to oranges). Put the S8 next to an S7 and the new one is actually narrower, and visibly so. So from the get go we'd say that the S8 has the most screen you can get in a phone this size, and even a few sizes up.",
		"Now, back to present time. The LG G6 has been around for some time, and we also asked you to look beyond the diagonal in our Galaxy S8+ review earlier this week. Displays are getting taller and breaking out of the 16:9 box they were trapped in for a few years now. But while LG opted for a square times-two 18:9 ratio, Samsung went with 18.5:9, because why not.Both of this season's premium Galaxies are in this bizarre 2.06:1 aspect, but the regular S8 is petite. It's a millimeter wider than an iPhone 7 with a screen surface of some 40% more than the small-sized Apple (that's real estate, not diagonal, so it isn't apples to oranges). Put the S8 next to an S7 and the new one is actually narrower, and visibly so. So from the get go we'd say that the S8 has the most screen you can get in a phone this size, and even a few sizes up.",
		"Now, back to present time. The LG G6 has been around for some time, and we also asked you to look beyond the diagonal in our Galaxy S8+ review earlier this week. Displays are getting taller and breaking out of the 16:9 box they were trapped in for a few years now. But while LG opted for a square times-two 18:9 ratio, Samsung went with 18.5:9, because why not.Both of this season's premium Galaxies are in this bizarre 2.06:1 aspect, but the regular S8 is petite. It's a millimeter wider than an iPhone 7 with a screen surface of some 40% more than the small-sized Apple (that's real estate, not diagonal, so it isn't apples to oranges). Put the S8 next to an S7 and the new one is actually narrower, and visibly so. So from the get go we'd say that the S8 has the most screen you can get in a phone this size, and even a few sizes up."
	),
    
    (
		3,
        2,
        "Samsung Galaxy S8",
        "https://youtu.be/nNlTNE1y9DM",
        1,
        400,
        460,
        1,
        "Now, back to present time. The LG G6 has been around for some time, and we also asked you to look beyond the diagonal in our Galaxy S8+ review earlier this week. Displays are getting taller and breaking out of the 16:9 box they were trapped in for a few years now. But while LG opted for a square times-two 18:9 ratio, Samsung went with 18.5:9, because why not.Both of this season's premium Galaxies are in this bizarre 2.06:1 aspect, but the regular S8 is petite. It's a millimeter wider than an iPhone 7 with a screen surface of some 40% more than the small-sized Apple (that's real estate, not diagonal, so it isn't apples to oranges). Put the S8 next to an S7 and the new one is actually narrower, and visibly so. So from the get go we'd say that the S8 has the most screen you can get in a phone this size, and even a few sizes up.",
		"Now, back to present time. The LG G6 has been around for some time, and we also asked you to look beyond the diagonal in our Galaxy S8+ review earlier this week. Displays are getting taller and breaking out of the 16:9 box they were trapped in for a few years now. But while LG opted for a square times-two 18:9 ratio, Samsung went with 18.5:9, because why not.Both of this season's premium Galaxies are in this bizarre 2.06:1 aspect, but the regular S8 is petite. It's a millimeter wider than an iPhone 7 with a screen surface of some 40% more than the small-sized Apple (that's real estate, not diagonal, so it isn't apples to oranges). Put the S8 next to an S7 and the new one is actually narrower, and visibly so. So from the get go we'd say that the S8 has the most screen you can get in a phone this size, and even a few sizes up.",
		"Now, back to present time. The LG G6 has been around for some time, and we also asked you to look beyond the diagonal in our Galaxy S8+ review earlier this week. Displays are getting taller and breaking out of the 16:9 box they were trapped in for a few years now. But while LG opted for a square times-two 18:9 ratio, Samsung went with 18.5:9, because why not.Both of this season's premium Galaxies are in this bizarre 2.06:1 aspect, but the regular S8 is petite. It's a millimeter wider than an iPhone 7 with a screen surface of some 40% more than the small-sized Apple (that's real estate, not diagonal, so it isn't apples to oranges). Put the S8 next to an S7 and the new one is actually narrower, and visibly so. So from the get go we'd say that the S8 has the most screen you can get in a phone this size, and even a few sizes up."
	),
    
    (
		1,
        1,
        "Samsung Galaxy S8",
        "https://youtu.be/nNlTNE1y9DM",
        1,
        400,
        460,
        1,
        "Now, back to present time. The LG G6 has been around for some time, and we also asked you to look beyond the diagonal in our Galaxy S8+ review earlier this week. Displays are getting taller and breaking out of the 16:9 box they were trapped in for a few years now. But while LG opted for a square times-two 18:9 ratio, Samsung went with 18.5:9, because why not.Both of this season's premium Galaxies are in this bizarre 2.06:1 aspect, but the regular S8 is petite. It's a millimeter wider than an iPhone 7 with a screen surface of some 40% more than the small-sized Apple (that's real estate, not diagonal, so it isn't apples to oranges). Put the S8 next to an S7 and the new one is actually narrower, and visibly so. So from the get go we'd say that the S8 has the most screen you can get in a phone this size, and even a few sizes up.",
		"Now, back to present time. The LG G6 has been around for some time, and we also asked you to look beyond the diagonal in our Galaxy S8+ review earlier this week. Displays are getting taller and breaking out of the 16:9 box they were trapped in for a few years now. But while LG opted for a square times-two 18:9 ratio, Samsung went with 18.5:9, because why not.Both of this season's premium Galaxies are in this bizarre 2.06:1 aspect, but the regular S8 is petite. It's a millimeter wider than an iPhone 7 with a screen surface of some 40% more than the small-sized Apple (that's real estate, not diagonal, so it isn't apples to oranges). Put the S8 next to an S7 and the new one is actually narrower, and visibly so. So from the get go we'd say that the S8 has the most screen you can get in a phone this size, and even a few sizes up.",
		"Now, back to present time. The LG G6 has been around for some time, and we also asked you to look beyond the diagonal in our Galaxy S8+ review earlier this week. Displays are getting taller and breaking out of the 16:9 box they were trapped in for a few years now. But while LG opted for a square times-two 18:9 ratio, Samsung went with 18.5:9, because why not.Both of this season's premium Galaxies are in this bizarre 2.06:1 aspect, but the regular S8 is petite. It's a millimeter wider than an iPhone 7 with a screen surface of some 40% more than the small-sized Apple (that's real estate, not diagonal, so it isn't apples to oranges). Put the S8 next to an S7 and the new one is actually narrower, and visibly so. So from the get go we'd say that the S8 has the most screen you can get in a phone this size, and even a few sizes up."
	),
    
    (
		1,
        1,
        "Samsung Galaxy S8",
        "https://youtu.be/nNlTNE1y9DM",
        1,
        400,
        460,
        1,
        "Now, back to present time. The LG G6 has been around for some time, and we also asked you to look beyond the diagonal in our Galaxy S8+ review earlier this week. Displays are getting taller and breaking out of the 16:9 box they were trapped in for a few years now. But while LG opted for a square times-two 18:9 ratio, Samsung went with 18.5:9, because why not.Both of this season's premium Galaxies are in this bizarre 2.06:1 aspect, but the regular S8 is petite. It's a millimeter wider than an iPhone 7 with a screen surface of some 40% more than the small-sized Apple (that's real estate, not diagonal, so it isn't apples to oranges). Put the S8 next to an S7 and the new one is actually narrower, and visibly so. So from the get go we'd say that the S8 has the most screen you can get in a phone this size, and even a few sizes up.",
		"Now, back to present time. The LG G6 has been around for some time, and we also asked you to look beyond the diagonal in our Galaxy S8+ review earlier this week. Displays are getting taller and breaking out of the 16:9 box they were trapped in for a few years now. But while LG opted for a square times-two 18:9 ratio, Samsung went with 18.5:9, because why not.Both of this season's premium Galaxies are in this bizarre 2.06:1 aspect, but the regular S8 is petite. It's a millimeter wider than an iPhone 7 with a screen surface of some 40% more than the small-sized Apple (that's real estate, not diagonal, so it isn't apples to oranges). Put the S8 next to an S7 and the new one is actually narrower, and visibly so. So from the get go we'd say that the S8 has the most screen you can get in a phone this size, and even a few sizes up.",
		"Now, back to present time. The LG G6 has been around for some time, and we also asked you to look beyond the diagonal in our Galaxy S8+ review earlier this week. Displays are getting taller and breaking out of the 16:9 box they were trapped in for a few years now. But while LG opted for a square times-two 18:9 ratio, Samsung went with 18.5:9, because why not.Both of this season's premium Galaxies are in this bizarre 2.06:1 aspect, but the regular S8 is petite. It's a millimeter wider than an iPhone 7 with a screen surface of some 40% more than the small-sized Apple (that's real estate, not diagonal, so it isn't apples to oranges). Put the S8 next to an S7 and the new one is actually narrower, and visibly so. So from the get go we'd say that the S8 has the most screen you can get in a phone this size, and even a few sizes up."
	),
    
    (
		1,
        1,
        "Samsung Galaxy S8",
        "https://youtu.be/nNlTNE1y9DM",
        1,
        400,
        460,
        1,
        "Now, back to present time. The LG G6 has been around for some time, and we also asked you to look beyond the diagonal in our Galaxy S8+ review earlier this week. Displays are getting taller and breaking out of the 16:9 box they were trapped in for a few years now. But while LG opted for a square times-two 18:9 ratio, Samsung went with 18.5:9, because why not.Both of this season's premium Galaxies are in this bizarre 2.06:1 aspect, but the regular S8 is petite. It's a millimeter wider than an iPhone 7 with a screen surface of some 40% more than the small-sized Apple (that's real estate, not diagonal, so it isn't apples to oranges). Put the S8 next to an S7 and the new one is actually narrower, and visibly so. So from the get go we'd say that the S8 has the most screen you can get in a phone this size, and even a few sizes up.",
		"Now, back to present time. The LG G6 has been around for some time, and we also asked you to look beyond the diagonal in our Galaxy S8+ review earlier this week. Displays are getting taller and breaking out of the 16:9 box they were trapped in for a few years now. But while LG opted for a square times-two 18:9 ratio, Samsung went with 18.5:9, because why not.Both of this season's premium Galaxies are in this bizarre 2.06:1 aspect, but the regular S8 is petite. It's a millimeter wider than an iPhone 7 with a screen surface of some 40% more than the small-sized Apple (that's real estate, not diagonal, so it isn't apples to oranges). Put the S8 next to an S7 and the new one is actually narrower, and visibly so. So from the get go we'd say that the S8 has the most screen you can get in a phone this size, and even a few sizes up.",
		"Now, back to present time. The LG G6 has been around for some time, and we also asked you to look beyond the diagonal in our Galaxy S8+ review earlier this week. Displays are getting taller and breaking out of the 16:9 box they were trapped in for a few years now. But while LG opted for a square times-two 18:9 ratio, Samsung went with 18.5:9, because why not.Both of this season's premium Galaxies are in this bizarre 2.06:1 aspect, but the regular S8 is petite. It's a millimeter wider than an iPhone 7 with a screen surface of some 40% more than the small-sized Apple (that's real estate, not diagonal, so it isn't apples to oranges). Put the S8 next to an S7 and the new one is actually narrower, and visibly so. So from the get go we'd say that the S8 has the most screen you can get in a phone this size, and even a few sizes up."
	),
    
    (
		1,
        1,
        "Samsung Galaxy S8",
        "https://youtu.be/nNlTNE1y9DM",
        1,
        400,
        460,
        1,
        "Now, back to present time. The LG G6 has been around for some time, and we also asked you to look beyond the diagonal in our Galaxy S8+ review earlier this week. Displays are getting taller and breaking out of the 16:9 box they were trapped in for a few years now. But while LG opted for a square times-two 18:9 ratio, Samsung went with 18.5:9, because why not.Both of this season's premium Galaxies are in this bizarre 2.06:1 aspect, but the regular S8 is petite. It's a millimeter wider than an iPhone 7 with a screen surface of some 40% more than the small-sized Apple (that's real estate, not diagonal, so it isn't apples to oranges). Put the S8 next to an S7 and the new one is actually narrower, and visibly so. So from the get go we'd say that the S8 has the most screen you can get in a phone this size, and even a few sizes up.",
		"Now, back to present time. The LG G6 has been around for some time, and we also asked you to look beyond the diagonal in our Galaxy S8+ review earlier this week. Displays are getting taller and breaking out of the 16:9 box they were trapped in for a few years now. But while LG opted for a square times-two 18:9 ratio, Samsung went with 18.5:9, because why not.Both of this season's premium Galaxies are in this bizarre 2.06:1 aspect, but the regular S8 is petite. It's a millimeter wider than an iPhone 7 with a screen surface of some 40% more than the small-sized Apple (that's real estate, not diagonal, so it isn't apples to oranges). Put the S8 next to an S7 and the new one is actually narrower, and visibly so. So from the get go we'd say that the S8 has the most screen you can get in a phone this size, and even a few sizes up.",
		"Now, back to present time. The LG G6 has been around for some time, and we also asked you to look beyond the diagonal in our Galaxy S8+ review earlier this week. Displays are getting taller and breaking out of the 16:9 box they were trapped in for a few years now. But while LG opted for a square times-two 18:9 ratio, Samsung went with 18.5:9, because why not.Both of this season's premium Galaxies are in this bizarre 2.06:1 aspect, but the regular S8 is petite. It's a millimeter wider than an iPhone 7 with a screen surface of some 40% more than the small-sized Apple (that's real estate, not diagonal, so it isn't apples to oranges). Put the S8 next to an S7 and the new one is actually narrower, and visibly so. So from the get go we'd say that the S8 has the most screen you can get in a phone this size, and even a few sizes up."
	),
    
    (
		1,
        1,
        "Samsung Galaxy S8",
        "https://youtu.be/nNlTNE1y9DM",
        1,
        400,
        460,
        1,
        "Now, back to present time. The LG G6 has been around for some time, and we also asked you to look beyond the diagonal in our Galaxy S8+ review earlier this week. Displays are getting taller and breaking out of the 16:9 box they were trapped in for a few years now. But while LG opted for a square times-two 18:9 ratio, Samsung went with 18.5:9, because why not.Both of this season's premium Galaxies are in this bizarre 2.06:1 aspect, but the regular S8 is petite. It's a millimeter wider than an iPhone 7 with a screen surface of some 40% more than the small-sized Apple (that's real estate, not diagonal, so it isn't apples to oranges). Put the S8 next to an S7 and the new one is actually narrower, and visibly so. So from the get go we'd say that the S8 has the most screen you can get in a phone this size, and even a few sizes up.",
		"Now, back to present time. The LG G6 has been around for some time, and we also asked you to look beyond the diagonal in our Galaxy S8+ review earlier this week. Displays are getting taller and breaking out of the 16:9 box they were trapped in for a few years now. But while LG opted for a square times-two 18:9 ratio, Samsung went with 18.5:9, because why not.Both of this season's premium Galaxies are in this bizarre 2.06:1 aspect, but the regular S8 is petite. It's a millimeter wider than an iPhone 7 with a screen surface of some 40% more than the small-sized Apple (that's real estate, not diagonal, so it isn't apples to oranges). Put the S8 next to an S7 and the new one is actually narrower, and visibly so. So from the get go we'd say that the S8 has the most screen you can get in a phone this size, and even a few sizes up.",
		"Now, back to present time. The LG G6 has been around for some time, and we also asked you to look beyond the diagonal in our Galaxy S8+ review earlier this week. Displays are getting taller and breaking out of the 16:9 box they were trapped in for a few years now. But while LG opted for a square times-two 18:9 ratio, Samsung went with 18.5:9, because why not.Both of this season's premium Galaxies are in this bizarre 2.06:1 aspect, but the regular S8 is petite. It's a millimeter wider than an iPhone 7 with a screen surface of some 40% more than the small-sized Apple (that's real estate, not diagonal, so it isn't apples to oranges). Put the S8 next to an S7 and the new one is actually narrower, and visibly so. So from the get go we'd say that the S8 has the most screen you can get in a phone this size, and even a few sizes up."
	),
    
    (
		1,
        1,
        "Samsung Galaxy S8",
        "https://youtu.be/nNlTNE1y9DM",
        1,
        400,
        460,
        1,
        "Now, back to present time. The LG G6 has been around for some time, and we also asked you to look beyond the diagonal in our Galaxy S8+ review earlier this week. Displays are getting taller and breaking out of the 16:9 box they were trapped in for a few years now. But while LG opted for a square times-two 18:9 ratio, Samsung went with 18.5:9, because why not.Both of this season's premium Galaxies are in this bizarre 2.06:1 aspect, but the regular S8 is petite. It's a millimeter wider than an iPhone 7 with a screen surface of some 40% more than the small-sized Apple (that's real estate, not diagonal, so it isn't apples to oranges). Put the S8 next to an S7 and the new one is actually narrower, and visibly so. So from the get go we'd say that the S8 has the most screen you can get in a phone this size, and even a few sizes up.",
		"Now, back to present time. The LG G6 has been around for some time, and we also asked you to look beyond the diagonal in our Galaxy S8+ review earlier this week. Displays are getting taller and breaking out of the 16:9 box they were trapped in for a few years now. But while LG opted for a square times-two 18:9 ratio, Samsung went with 18.5:9, because why not.Both of this season's premium Galaxies are in this bizarre 2.06:1 aspect, but the regular S8 is petite. It's a millimeter wider than an iPhone 7 with a screen surface of some 40% more than the small-sized Apple (that's real estate, not diagonal, so it isn't apples to oranges). Put the S8 next to an S7 and the new one is actually narrower, and visibly so. So from the get go we'd say that the S8 has the most screen you can get in a phone this size, and even a few sizes up.",
		"Now, back to present time. The LG G6 has been around for some time, and we also asked you to look beyond the diagonal in our Galaxy S8+ review earlier this week. Displays are getting taller and breaking out of the 16:9 box they were trapped in for a few years now. But while LG opted for a square times-two 18:9 ratio, Samsung went with 18.5:9, because why not.Both of this season's premium Galaxies are in this bizarre 2.06:1 aspect, but the regular S8 is petite. It's a millimeter wider than an iPhone 7 with a screen surface of some 40% more than the small-sized Apple (that's real estate, not diagonal, so it isn't apples to oranges). Put the S8 next to an S7 and the new one is actually narrower, and visibly so. So from the get go we'd say that the S8 has the most screen you can get in a phone this size, and even a few sizes up."
	),
    
    (
		1,
        1,
        "Samsung Galaxy S8",
        "https://youtu.be/nNlTNE1y9DM",
        1,
        400,
        460,
        1,
        "Now, back to present time. The LG G6 has been around for some time, and we also asked you to look beyond the diagonal in our Galaxy S8+ review earlier this week. Displays are getting taller and breaking out of the 16:9 box they were trapped in for a few years now. But while LG opted for a square times-two 18:9 ratio, Samsung went with 18.5:9, because why not.Both of this season's premium Galaxies are in this bizarre 2.06:1 aspect, but the regular S8 is petite. It's a millimeter wider than an iPhone 7 with a screen surface of some 40% more than the small-sized Apple (that's real estate, not diagonal, so it isn't apples to oranges). Put the S8 next to an S7 and the new one is actually narrower, and visibly so. So from the get go we'd say that the S8 has the most screen you can get in a phone this size, and even a few sizes up.",
		"Now, back to present time. The LG G6 has been around for some time, and we also asked you to look beyond the diagonal in our Galaxy S8+ review earlier this week. Displays are getting taller and breaking out of the 16:9 box they were trapped in for a few years now. But while LG opted for a square times-two 18:9 ratio, Samsung went with 18.5:9, because why not.Both of this season's premium Galaxies are in this bizarre 2.06:1 aspect, but the regular S8 is petite. It's a millimeter wider than an iPhone 7 with a screen surface of some 40% more than the small-sized Apple (that's real estate, not diagonal, so it isn't apples to oranges). Put the S8 next to an S7 and the new one is actually narrower, and visibly so. So from the get go we'd say that the S8 has the most screen you can get in a phone this size, and even a few sizes up.",
		"Now, back to present time. The LG G6 has been around for some time, and we also asked you to look beyond the diagonal in our Galaxy S8+ review earlier this week. Displays are getting taller and breaking out of the 16:9 box they were trapped in for a few years now. But while LG opted for a square times-two 18:9 ratio, Samsung went with 18.5:9, because why not.Both of this season's premium Galaxies are in this bizarre 2.06:1 aspect, but the regular S8 is petite. It's a millimeter wider than an iPhone 7 with a screen surface of some 40% more than the small-sized Apple (that's real estate, not diagonal, so it isn't apples to oranges). Put the S8 next to an S7 and the new one is actually narrower, and visibly so. So from the get go we'd say that the S8 has the most screen you can get in a phone this size, and even a few sizes up."
	),
    
    (
		1,
        1,
        "Samsung Galaxy S8",
        "https://youtu.be/nNlTNE1y9DM",
        1,
        400,
        460,
        1,
        "Now, back to present time. The LG G6 has been around for some time, and we also asked you to look beyond the diagonal in our Galaxy S8+ review earlier this week. Displays are getting taller and breaking out of the 16:9 box they were trapped in for a few years now. But while LG opted for a square times-two 18:9 ratio, Samsung went with 18.5:9, because why not.Both of this season's premium Galaxies are in this bizarre 2.06:1 aspect, but the regular S8 is petite. It's a millimeter wider than an iPhone 7 with a screen surface of some 40% more than the small-sized Apple (that's real estate, not diagonal, so it isn't apples to oranges). Put the S8 next to an S7 and the new one is actually narrower, and visibly so. So from the get go we'd say that the S8 has the most screen you can get in a phone this size, and even a few sizes up.",
		"Now, back to present time. The LG G6 has been around for some time, and we also asked you to look beyond the diagonal in our Galaxy S8+ review earlier this week. Displays are getting taller and breaking out of the 16:9 box they were trapped in for a few years now. But while LG opted for a square times-two 18:9 ratio, Samsung went with 18.5:9, because why not.Both of this season's premium Galaxies are in this bizarre 2.06:1 aspect, but the regular S8 is petite. It's a millimeter wider than an iPhone 7 with a screen surface of some 40% more than the small-sized Apple (that's real estate, not diagonal, so it isn't apples to oranges). Put the S8 next to an S7 and the new one is actually narrower, and visibly so. So from the get go we'd say that the S8 has the most screen you can get in a phone this size, and even a few sizes up.",
		"Now, back to present time. The LG G6 has been around for some time, and we also asked you to look beyond the diagonal in our Galaxy S8+ review earlier this week. Displays are getting taller and breaking out of the 16:9 box they were trapped in for a few years now. But while LG opted for a square times-two 18:9 ratio, Samsung went with 18.5:9, because why not.Both of this season's premium Galaxies are in this bizarre 2.06:1 aspect, but the regular S8 is petite. It's a millimeter wider than an iPhone 7 with a screen surface of some 40% more than the small-sized Apple (that's real estate, not diagonal, so it isn't apples to oranges). Put the S8 next to an S7 and the new one is actually narrower, and visibly so. So from the get go we'd say that the S8 has the most screen you can get in a phone this size, and even a few sizes up."
	);
    
    








INSERT INTO images(products_id, image_1, image_2, image_3, image_4)
VALUES 


	(
        1,
        'phone/Samsung galaxy s8=9.jpg',
        'phone/Samsung galaxy s8=9.jpg',
        'phone/Samsung galaxy s8=9.jpg',
        'phone/Samsung galaxy s8=9.jpg' 
    ),



    (
        2,
        'phone/Samsung galaxy s8=9.jpg',
        'phone/Samsung galaxy s8=9.jpg',
        'phone/Samsung galaxy s8=9.jpg',
        'phone/Samsung galaxy s8=9.jpg'
    ),



    (
        3,
        'phone/Samsung galaxy s8=9.jpg',
        'phone/Samsung galaxy s8=9.jpg',
        'phone/Samsung galaxy s8=9.jpg',
        'phone/Samsung galaxy s8=9.jpg'
    ),



    (
        4,
        'phone/Samsung galaxy s8=9.jpg',
        'phone/Samsung galaxy s8=9.jpg',
        'phone/Samsung galaxy s8=9.jpg',
        'phone/Samsung galaxy s8=9.jpg'
    ),



    (
        5,
        'phone/Samsung galaxy s8=9.jpg',
        'phone/Samsung galaxy s8=9.jpg',
        'phone/Samsung galaxy s8=9.jpg',
        'phone/Samsung galaxy s8=9.jpg'
    ),



    (
        6,
        'phone/Samsung galaxy s8=9.jpg',
        'phone/Samsung galaxy s8=9.jpg',
        'phone/Samsung galaxy s8=9.jpg',
        'phone/Samsung galaxy s8=9.jpg'
    ),



    (
        7,
        'phone/Samsung galaxy s8=9.jpg',
        'phone/Samsung galaxy s8=9.jpg',
        'phone/Samsung galaxy s8=9.jpg',
        'phone/Samsung galaxy s8=9.jpg'
    ),



    (
        8,
        'phone/Samsung galaxy s8=9.jpg',
        'phone/Samsung galaxy s8=9.jpg',
        'phone/Samsung galaxy s8=9.jpg',
        'phone/Samsung galaxy s8=9.jpg'
    ),



    (
        9,
        'phone/Samsung galaxy s8=9.jpg',
        'phone/Samsung galaxy s8=9.jpg',
        'phone/Samsung galaxy s8=9.jpg',
        'phone/Samsung galaxy s8=9.jpg'
    ),



    (
        10,
        'phone/Samsung galaxy s8=9.jpg',
        'phone/Samsung galaxy s8=9.jpg',
        'phone/Samsung galaxy s8=9.jpg',
        'phone/Samsung galaxy s8=9.jpg'
    ),



    (
        11,
        'phone/Samsung galaxy s8=9.jpg',
        'phone/Samsung galaxy s8=9.jpg',
        'phone/Samsung galaxy s8=9.jpg',
        'phone/Samsung galaxy s8=9.jpg'
    ),



    (
        12,
        'phone/Samsung galaxy s8=9.jpg',
        'phone/Samsung galaxy s8=9.jpg',
        'phone/Samsung galaxy s8=9.jpg',
        'phone/Samsung galaxy s8=9.jpg'
    ),



    (
        13,
        'phone/Samsung galaxy s8=9.jpg',
        'phone/Samsung galaxy s8=9.jpg',
        'phone/Samsung galaxy s8=9.jpg',
        'phone/Samsung galaxy s8=9.jpg'
    );
    


INSERT INTO product_details(products_id, characteristic_category, characteristic_attribute, characteristic_value_en) 
VALUES
	(
		1,
        'მწარმოებელი',
        'ბრენდი',
        'Samsung'
    ),
    (
		1,
        'წარმოება',
        'გამოშვების თარიღი',
        '2017, April'
    ),
    (
		1,
        'კომუნიკაცია',
        'ტექნოლოგია',
        'GSM / CDMA / HSPA / LTE'
    ),
    (
		1,
        'კომუნიკაცია',
        'კავშირების სტანდარტი',
        '4G'
    ),
    (
		1,
        'კორპუსი',
        'მობილურის ტიპი',
        'Smartphone'
    ),
    (
		1,
        'კორპუსი',
        'ზომები',
        '148.9 x 68.1 x 8 mm'
    ),
    (
		1,
        'კორპუსი',
        'კორპუსის აწყობა',
        'Front glass, aluminum body'
    ),
    (
		1,
        'ეკრანი',
        'ეკრანის ტიპი',
        'Super AMOLED, capacitive touchscreen, 16M colors'
    ),
    (
        1,
        'ეკრანი',
        'ეკრანის ზომა',
        '5.8 inches'
    ),
    (
        1,
        'ეკრანი',
        'ეკრანის ზედაპირი',
        '84.8 cm2 (~83.6% screen-to-body ratio)'
    ),
    (
        1,
        'ეკრანი',
        'ეკრანის გაფართოება',
        '1440X2960 Pixels'
    ),
    (
        1,
        'ეკრანი',
        'ეკრანის ფორმატი',
        '18.5:9 ratio, (~570 ppi density)'
    ),
    (
        1,
        'პლატფორმა',
        'ოპერაციული სისტემა',
        'Android Nougat'
    ),
    (
        1,
        'პლატფორმა',
        'პროცესორი',
        'Octa-core (4x2.3 GHz & 4x1.7 GHz)'
    ),
    (
                2,
        'კომუნიკაცია',
        'ტექნოლოგია',
        'GSM / CDMA / HSPA / LTE'
    ),
    (
                2,
        'კომუნიკაცია',
        'კავშირების სტანდარტი',
        '4G'
    ),
    (
                2,
        'კორპუსი',
        'მობილურის ტიპი',
        'Smartphone'
    ),
    (
                2,
        'კორპუსი',
        'ზომები',
        '148.9 x 68.1 x 8 mm'
    ),
    (
                2,
        'კორპუსი',
        'კორპუსის აწყობა',
        'Front glass, aluminum body'
    ),
    (
                2,
        'ეკრანი',
        'ეკრანის ტიპი',
        'Super AMOLED, capacitive touchscreen, 16M colors'
    ),
    (
        2,
        'ეკრანი',
        'ეკრანის ზომა',
        '5.8 inches'
    ),
    (
        2,
        'ეკრანი',
        'ეკრანის ზედაპირი',
        '84.8 cm2 (~83.6% screen-to-body ratio)'
    ),
    (
        2,
        'ეკრანი',
        'ეკრანის გაფართოება',
        '1440X2960 Pixels'
    ),
    (
        2,
        'ეკრანი',
        'ეკრანის ფორმატი',
        '18.5:9 ratio, (~570 ppi density)'
    ),
    (
        2,
        'პლატფორმა',
        'ოპერაციული სისტემა',
        'Android Nougat'
    ),
    (
        2,
        'პლატფორმა',
        'პროცესორი',
        'Octa-core (4x2.3 GHz & 4x1.7 GHz)'
    ),



    (
                3,
        'მწარმოებელი',
        'ბრენდი',
        'Samsung'
    ),
    (
                3,
        'წარმოება',
        'გამოშვების თარიღი',
        '2017, April'
    ),
    (
                3,
        'კომუნიკაცია',
        'ტექნოლოგია',
        'GSM / CDMA / HSPA / LTE'
    ),
    (
                3,
        'კომუნიკაცია',
        'კავშირების სტანდარტი',
        '4G'
    ),
    (
                3,
        'კორპუსი',
        'მობილურის ტიპი',
        'Smartphone'
    ),
    (
                3,
        'კორპუსი',
        'ზომები',
        '148.9 x 68.1 x 8 mm'
    ),
    (
                3,
        'კორპუსი',
        'კორპუსის აწყობა',
        'Front glass, aluminum body'
    ),
    (
                3,
        'ეკრანი',
        'ეკრანის ტიპი',
        'Super AMOLED, capacitive touchscreen, 16M colors'
    ),
    (
        3,
        'ეკრანი',
        'ეკრანის ზომა',
        '5.8 inches'
    ),
    (
        3,
        'ეკრანი',
        'ეკრანის ზედაპირი',
        '84.8 cm2 (~83.6% screen-to-body ratio)'
    ),
    (
        3,
        'ეკრანი',
        'ეკრანის გაფართოება',
        '1440X2960 Pixels'
    ),
    (
        3,
        'ეკრანი',
        'ეკრანის ფორმატი',
        '18.5:9 ratio, (~570 ppi density)'
    ),
    (
        3,
        'პლატფორმა',
        'ოპერაციული სისტემა',
        'Android Nougat'
    ),
    (
        3,
        'პლატფორმა',
        'პროცესორი',
        'Octa-core (4x2.3 GHz & 4x1.7 GHz)'
    ),



    (
                4,
        'მწარმოებელი',
        'ბრენდი',
        'Samsung'
    ),
    (
                4,
        'წარმოება',
        'გამოშვების თარიღი',
        '2017, April'
    ),
    (
                4,
        'კომუნიკაცია',
        'ტექნოლოგია',
        'GSM / CDMA / HSPA / LTE'
    ),
    (
                4,
        'კომუნიკაცია',
        'კავშირების სტანდარტი',
        '4G'
    ),
    (
                4,
        'კორპუსი',
        'მობილურის ტიპი',
        'Smartphone'
    ),
    (
                4,
        'კორპუსი',
        'ზომები',
        '148.9 x 68.1 x 8 mm'
    ),
    (
                4,
        'კორპუსი',
        'კორპუსის აწყობა',
        'Front glass, aluminum body'
    ),
    (
                4,
        'ეკრანი',
        'ეკრანის ტიპი',
        'Super AMOLED, capacitive touchscreen, 16M colors'
    ),
    (
        4,
        'ეკრანი',
        'ეკრანის ზომა',
        '5.8 inches'
    ),
    (
        4,
        'ეკრანი',
        'ეკრანის ზედაპირი',
        '84.8 cm2 (~83.6% screen-to-body ratio)'
    ),
    (
        4,
        'ეკრანი',
        'ეკრანის გაფართოება',
        '1440X2960 Pixels'
    ),
    (
        4,
        'ეკრანი',
        'ეკრანის ფორმატი',
        '18.5:9 ratio, (~570 ppi density)'
    ),
    (
        4,
        'პლატფორმა',
        'ოპერაციული სისტემა',
        'Android Nougat'
    ),
    (
        4,
        'პლატფორმა',
        'პროცესორი',
        'Octa-core (4x2.3 GHz & 4x1.7 GHz)'
    ),



    (
                5,
        'მწარმოებელი',
        'ბრენდი',
        'Samsung'
    ),
    (
                5,
        'წარმოება',
        'გამოშვების თარიღი',
        '2017, April'
    ),
    (
                5,
        'კომუნიკაცია',
        'ტექნოლოგია',
        'GSM / CDMA / HSPA / LTE'
    ),
    (
                5,
        'კომუნიკაცია',
        'კავშირების სტანდარტი',
        '4G'
    ),
    (
                5,
        'კორპუსი',
        'მობილურის ტიპი',
        'Smartphone'
    ),
    (
                5,
        'კორპუსი',
        'ზომები',
        '148.9 x 68.1 x 8 mm'
    ),
    (
                5,
        'კორპუსი',
        'კორპუსის აწყობა',
        'Front glass, aluminum body'
    ),
    (
                5,
        'ეკრანი',
        'ეკრანის ტიპი',
        'Super AMOLED, capacitive touchscreen, 16M colors'
    ),
    (
        5,
        'ეკრანი',
        'ეკრანის ზომა',
        '5.8 inches'
    ),
    (
        5,
        'ეკრანი',
        'ეკრანის ზედაპირი',
        '84.8 cm2 (~83.6% screen-to-body ratio)'
    ),
    (
        5,
        'ეკრანი',
        'ეკრანის გაფართოება',
        '1440X2960 Pixels'
    ),
    (
        5,
        'ეკრანი',
        'ეკრანის ფორმატი',
        '18.5:9 ratio, (~570 ppi density)'
    ),
    (
        5,
        'პლატფორმა',
        'ოპერაციული სისტემა',
        'Android Nougat'
    ),
    (
        5,
        'პლატფორმა',
        'პროცესორი',
        'Octa-core (4x2.3 GHz & 4x1.7 GHz)'
    ),



    (
                6,
        'მწარმოებელი',
        'ბრენდი',
        'Samsung'
    ),
    (
                6,
        'წარმოება',
        'გამოშვების თარიღი',
        '2017, April'
    ),
    (
                6,
        'კომუნიკაცია',
        'ტექნოლოგია',
        'GSM / CDMA / HSPA / LTE'
    ),
    (
                6,
        'კომუნიკაცია',
        'კავშირების სტანდარტი',
        '4G'
    ),
    (
                6,
        'კორპუსი',
        'მობილურის ტიპი',
        'Smartphone'
    ),
    (
                6,
        'კორპუსი',
        'ზომები',
        '148.9 x 68.1 x 8 mm'
    ),
    (
                6,
        'კორპუსი',
        'კორპუსის აწყობა',
        'Front glass, aluminum body'
    ),
    (
                6,
        'ეკრანი',
        'ეკრანის ტიპი',
        'Super AMOLED, capacitive touchscreen, 16M colors'
    ),
    (
        6,
        'ეკრანი',
        'ეკრანის ზომა',
        '5.8 inches'
    ),
    (
        6,
        'ეკრანი',
        'ეკრანის ზედაპირი',
        '84.8 cm2 (~83.6% screen-to-body ratio)'
    ),
    (
        6,
        'ეკრანი',
        'ეკრანის გაფართოება',
        '1440X2960 Pixels'
    ),
    (
        6,
        'ეკრანი',
        'ეკრანის ფორმატი',
        '18.5:9 ratio, (~570 ppi density)'
    ),
    (
        6,
        'პლატფორმა',
        'ოპერაციული სისტემა',
        'Android Nougat'
    ),
    (
        6,
        'პლატფორმა',
        'პროცესორი',
        'Octa-core (4x2.3 GHz & 4x1.7 GHz)'
    ),



    (
                7,
        'მწარმოებელი',
        'ბრენდი',
        'Samsung'
    ),
    (
                7,
        'წარმოება',
        'გამოშვების თარიღი',
        '2017, April'
    ),
    (
                7,
        'კომუნიკაცია',
        'ტექნოლოგია',
        'GSM / CDMA / HSPA / LTE'
    ),
    (
                7,
        'კომუნიკაცია',
        'კავშირების სტანდარტი',
        '4G'
    ),
    (
                7,
        'კორპუსი',
        'მობილურის ტიპი',
        'Smartphone'
    ),
    (
                7,
        'კორპუსი',
        'ზომები',
        '148.9 x 68.1 x 8 mm'
    ),
    (
                7,
        'კორპუსი',
        'კორპუსის აწყობა',
        'Front glass, aluminum body'
    ),
    (
                7,
        'ეკრანი',
        'ეკრანის ტიპი',
        'Super AMOLED, capacitive touchscreen, 16M colors'
    ),
    (
        7,
        'ეკრანი',
        'ეკრანის ზომა',
        '5.8 inches'
    ),
    (
        7,
        'ეკრანი',
        'ეკრანის ზედაპირი',
        '84.8 cm2 (~83.6% screen-to-body ratio)'
    ),
    (
        7,
        'ეკრანი',
        'ეკრანის გაფართოება',
        '1440X2960 Pixels'
    ),
    (
        7,
        'ეკრანი',
        'ეკრანის ფორმატი',
        '18.5:9 ratio, (~570 ppi density)'
    ),
    (
        7,
        'პლატფორმა',
        'ოპერაციული სისტემა',
        'Android Nougat'
    ),
    (
        7,
        'პლატფორმა',
        'პროცესორი',
        'Octa-core (4x2.3 GHz & 4x1.7 GHz)'
    ),



    (
                8,
        'მწარმოებელი',
        'ბრენდი',
        'Samsung'
    ),
    (
                8,
        'წარმოება',
        'გამოშვების თარიღი',
        '2017, April'
    ),
    (
                8,
        'კომუნიკაცია',
        'ტექნოლოგია',
        'GSM / CDMA / HSPA / LTE'
    ),
    (
                8,
        'კომუნიკაცია',
        'კავშირების სტანდარტი',
        '4G'
    ),
    (
                8,
        'კორპუსი',
        'მობილურის ტიპი',
        'Smartphone'
    ),
    (
                8,
        'კორპუსი',
        'ზომები',
        '148.9 x 68.1 x 8 mm'
    ),
    (
                8,
        'კორპუსი',
        'კორპუსის აწყობა',
        'Front glass, aluminum body'
    ),
    (
                8,
        'ეკრანი',
        'ეკრანის ტიპი',
        'Super AMOLED, capacitive touchscreen, 16M colors'
    ),
    (
        8,
        'ეკრანი',
        'ეკრანის ზომა',
        '5.8 inches'
    ),
    (
        8,
        'ეკრანი',
        'ეკრანის ზედაპირი',
        '84.8 cm2 (~83.6% screen-to-body ratio)'
    ),
    (
        8,
        'ეკრანი',
        'ეკრანის გაფართოება',
        '1440X2960 Pixels'
    ),
    (
        8,
        'ეკრანი',
        'ეკრანის ფორმატი',
        '18.5:9 ratio, (~570 ppi density)'
    ),
    (
        8,
        'პლატფორმა',
        'ოპერაციული სისტემა',
        'Android Nougat'
    ),
    (
        8,
        'პლატფორმა',
        'პროცესორი',
        'Octa-core (4x2.3 GHz & 4x1.7 GHz)'
    ),



    (
                9,
        'მწარმოებელი',
        'ბრენდი',
        'Samsung'
    ),
    (
                9,
        'წარმოება',
        'გამოშვების თარიღი',
        '2017, April'
    ),
    (
                9,
        'კომუნიკაცია',
        'ტექნოლოგია',
        'GSM / CDMA / HSPA / LTE'
    ),
    (
                9,
        'კომუნიკაცია',
        'კავშირების სტანდარტი',
        '4G'
    ),
    (
                9,
        'კორპუსი',
        'მობილურის ტიპი',
        'Smartphone'
    ),
    (
                9,
        'კორპუსი',
        'ზომები',
        '148.9 x 68.1 x 8 mm'
    ),
    (
                9,
        'კორპუსი',
        'კორპუსის აწყობა',
        'Front glass, aluminum body'
    ),
    (
                9,
        'ეკრანი',
        'ეკრანის ტიპი',
        'Super AMOLED, capacitive touchscreen, 16M colors'
    ),
    (
        9,
        'ეკრანი',
        'ეკრანის ზომა',
        '5.8 inches'
    ),
    (
        9,
        'ეკრანი',
        'ეკრანის ზედაპირი',
        '84.8 cm2 (~83.6% screen-to-body ratio)'
    ),
    (
        9,
        'ეკრანი',
        'ეკრანის გაფართოება',
        '1440X2960 Pixels'
    ),
    (
        9,
        'ეკრანი',
        'ეკრანის ფორმატი',
        '18.5:9 ratio, (~570 ppi density)'
    ),
    (
        9,
        'პლატფორმა',
        'ოპერაციული სისტემა',
        'Android Nougat'
    ),
    (
        9,
        'პლატფორმა',
        'პროცესორი',
        'Octa-core (4x2.3 GHz & 4x1.7 GHz)'
    ),



    (
                10,
        'მწარმოებელი',
        'ბრენდი',
        'Samsung'
    ),
    (
                10,
        'წარმოება',
        'გამოშვების თარიღი',
        '2017, April'
    ),
    (
                10,
        'კომუნიკაცია',
        'ტექნოლოგია',
        'GSM / CDMA / HSPA / LTE'
    ),
    (
                10,
        'კომუნიკაცია',
        'კავშირების სტანდარტი',
        '4G'
    ),
    (
                10,
        'კორპუსი',
        'მობილურის ტიპი',
        'Smartphone'
    ),
    (
                10,
        'კორპუსი',
        'ზომები',
        '148.9 x 68.1 x 8 mm'
    ),
    (
                10,
        'კორპუსი',
        'კორპუსის აწყობა',
        'Front glass, aluminum body'
    ),
    (
                10,
        'ეკრანი',
        'ეკრანის ტიპი',
        'Super AMOLED, capacitive touchscreen, 16M colors'
    ),
    (
        10,
        'ეკრანი',
        'ეკრანის ზომა',
        '5.8 inches'
    ),
    (
        10,
        'ეკრანი',
        'ეკრანის ზედაპირი',
        '84.8 cm2 (~83.6% screen-to-body ratio)'
    ),
    (
        10,
        'ეკრანი',
        'ეკრანის გაფართოება',
        '1440X2960 Pixels'
    ),
    (
        10,
        'ეკრანი',
        'ეკრანის ფორმატი',
        '18.5:9 ratio, (~570 ppi density)'
    ),
    (
        10,
        'პლატფორმა',
        'ოპერაციული სისტემა',
        'Android Nougat'
    ),
    (
        10,
        'პლატფორმა',
        'პროცესორი',
        'Octa-core (4x2.3 GHz & 4x1.7 GHz)'
    ),



    (
                11,
        'მწარმოებელი',
        'ბრენდი',
        'Samsung'
    ),
    (
                11,
        'წარმოება',
        'გამოშვების თარიღი',
        '2017, April'
    ),
    (
                11,
        'კომუნიკაცია',
        'ტექნოლოგია',
        'GSM / CDMA / HSPA / LTE'
    ),
    (
                11,
        'კომუნიკაცია',
        'კავშირების სტანდარტი',
        '4G'
    ),
    (
                11,
        'კორპუსი',
        'მობილურის ტიპი',
        'Smartphone'
    ),
    (
                11,
        'კორპუსი',
        'ზომები',
        '148.9 x 68.1 x 8 mm'
    ),
    (
                11,
        'კორპუსი',
        'კორპუსის აწყობა',
        'Front glass, aluminum body'
    ),
    (
                11,
        'ეკრანი',
        'ეკრანის ტიპი',
        'Super AMOLED, capacitive touchscreen, 16M colors'
    ),
    (
        11,
        'ეკრანი',
        'ეკრანის ზომა',
        '5.8 inches'
    ),
    (
        11,
        'ეკრანი',
        'ეკრანის ზედაპირი',
        '84.8 cm2 (~83.6% screen-to-body ratio)'
    ),
    (
        11,
        'ეკრანი',
        'ეკრანის გაფართოება',
        '1440X2960 Pixels'
    ),
    (
        11,
        'ეკრანი',
        'ეკრანის ფორმატი',
        '18.5:9 ratio, (~570 ppi density)'
    ),
    (
        11,
        'პლატფორმა',
        'ოპერაციული სისტემა',
        'Android Nougat'
    ),
    (
        11,
        'პლატფორმა',
        'პროცესორი',
        'Octa-core (4x2.3 GHz & 4x1.7 GHz)'
    ),



    (
                12,
        'მწარმოებელი',
        'ბრენდი',
        'Samsung'
    ),
    (
                12,
        'წარმოება',
        'გამოშვების თარიღი',
        '2017, April'
    ),
    (
                12,
        'კომუნიკაცია',
        'ტექნოლოგია',
        'GSM / CDMA / HSPA / LTE'
    ),
    (
                12,
        'კომუნიკაცია',
        'კავშირების სტანდარტი',
        '4G'
    ),
    (
                12,
        'კორპუსი',
        'მობილურის ტიპი',
        'Smartphone'
    ),
    (
                12,
        'კორპუსი',
        'ზომები',
        '148.9 x 68.1 x 8 mm'
    ),
    (
                12,
        'კორპუსი',
        'კორპუსის აწყობა',
        'Front glass, aluminum body'
    ),
    (
                12,
        'ეკრანი',
        'ეკრანის ტიპი',
        'Super AMOLED, capacitive touchscreen, 16M colors'
    ),
    (
        12,
        'ეკრანი',
        'ეკრანის ზომა',
        '5.8 inches'
    ),
    (
        12,
        'ეკრანი',
        'ეკრანის ზედაპირი',
        '84.8 cm2 (~83.6% screen-to-body ratio)'
    ),
    (
        12,
        'ეკრანი',
        'ეკრანის გაფართოება',
        '1440X2960 Pixels'
    ),
    (
        12,
        'ეკრანი',
        'ეკრანის ფორმატი',
        '18.5:9 ratio, (~570 ppi density)'
    ),
    (
        12,
        'პლატფორმა',
        'ოპერაციული სისტემა',
        'Android Nougat'
    ),
    (
        12,
        'პლატფორმა',
        'პროცესორი',
        'Octa-core (4x2.3 GHz & 4x1.7 GHz)'
    ),



    (
                13,
        'მწარმოებელი',
        'ბრენდი',
        'Samsung'
    ),
    (
                13,
        'წარმოება',
        'გამოშვების თარიღი',
        '2017, April'
    ),
    (
                13,
        'კომუნიკაცია',
        'ტექნოლოგია',
        'GSM / CDMA / HSPA / LTE'
    ),
    (
                13,
        'კომუნიკაცია',
        'კავშირების სტანდარტი',
        '4G'
    ),
    (
                13,
        'კორპუსი',
        'მობილურის ტიპი',
        'Smartphone'
    ),
    (
                13,
        'კორპუსი',
        'ზომები',
        '148.9 x 68.1 x 8 mm'
    ),
    (
                13,
        'კორპუსი',
        'კორპუსის აწყობა',
        'Front glass, aluminum body'
    ),
    (
                13,
        'ეკრანი',
        'ეკრანის ტიპი',
        'Super AMOLED, capacitive touchscreen, 16M colors'
    ),
    (
        13,
        'ეკრანი',
        'ეკრანის ზომა',
        '5.8 inches'
    ),
    (
        13,
        'ეკრანი',
        'ეკრანის ზედაპირი',
        '84.8 cm2 (~83.6% screen-to-body ratio)'
    ),
    (
        13,
        'ეკრანი',
        'ეკრანის გაფართოება',
        '1440X2960 Pixels'
    ),
    (
        13,
        'ეკრანი',
        'ეკრანის ფორმატი',
        '18.5:9 ratio, (~570 ppi density)'
    ),
    (
        13,
        'პლატფორმა',
        'ოპერაციული სისტემა',
        'Android Nougat'
    ),
    (
        13,
        'პლატფორმა',
        'პროცესორი',
        'Octa-core (4x2.3 GHz & 4x1.7 GHz)'
    );
    
    