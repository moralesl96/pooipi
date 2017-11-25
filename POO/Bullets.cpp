#include "Bullets.h"

void Bullets::load(int x, int y, int width, int height, std::string textureID)
{
 GameObject::load(x, y, width, height, textureID);
}

void Bullets::update()
{
 m_currentFrame = int(((SDL_GetTicks() / 100) % 1));
 m_y--;
}

void Bullets::update_enemy()
{
 m_currentFrame = int(((SDL_GetTicks() / 100) % 1));
 m_y++;
}

/*void Bullets::moving(int x, int y)
{
 //m_x += x;
 m_y -= y;
}*/
