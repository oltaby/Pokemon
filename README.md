
# Card Trading Application

## Overview
This project is a card trading platform that allows users to view, create, trade, and manage cards. It supports an Admin panel for managing the card database and features user-specific functionality like buying, selling, and exchanging cards.

## Features

### Main Page
- Displays a list of all cards with pictures.
- Allows filtering of cards by type.
- Clicking on a card’s name navigates to the card details page.
- Displays the logged-in user's name and available money.
- Users can:
  - Buy cards (if logged in).
  - Buy random cards for a fixed price.
  - Navigate through paginated card listings (9 cards per page).

### Card Details Page
- Shows the card's attributes, including:
  - Name
  - HP
  - Description
  - Element
- Displays the card image.
- Changes background color or page elements based on the card’s element (e.g., Fire = Red).

### User Features
- **Registration and Login:**
  - Registration with proper error handling and status messages.
  - Successful login and logout functionality.
- **User Details Page:**
  - Displays the user’s name, email, and money.
  - Shows cards associated with the user.
  - Allows users to sell their cards:
    - Cards are sold at 90% of their original price.
    - The sold card is returned to the Admin deck.
- **Card Actions:**
  - Users can buy cards (up to 5 cards or as much as they can afford).
  - Users can exchange cards with other users, including optional monetary compensation.

### Admin Features
- **Admin Authentication:**
  - Admins can log in to access additional features.
- **Card Management:**
  - Create new cards with error handling and validation.
  - Modify unsold cards.
- **Deck Management:**
  - Admins can manage cards returned to the deck by users.

## Usage

- **Admin:** Log in to manage cards, create new cards, and modify unsold cards.
- **User:** Register or log in to buy, sell, or trade cards.
