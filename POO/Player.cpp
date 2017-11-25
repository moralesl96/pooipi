#include "Player.h"

void Player::load(int x, int y, int width, int height, std::string textureID)
{
 GameObject::load(x, y, width, height, textureID);
}

void Player::update()
{
 m_currentFrame = int(((SDL_GetTicks() / 100) % 6));
}

void Player::moving(int x, int y)
{
 m_x += x;
 m_y += y;
}
