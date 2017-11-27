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
 while (m_x==0)
    m_x+=5;
 //else
   // m_x += x;
 while (m_x==580)
    m_x-=5;
 while (m_y==0)
    m_y +=5;
 while (m_y==400)
    m_y-=5;
 m_x += x;
 m_y += y;
}
