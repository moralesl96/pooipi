#include "GameObject.h"

void GameObject::load(int x, int y, int width, int height, std::string textureID)
{
 m_x = x;
 m_y = y;
 m_width = width;
 m_height = height;
 m_textureID = textureID;
 m_currentRow = 1;
 m_currentFrame = 1;
}

void GameObject::draw(SDL_Renderer *pRenderer, TextureManager *pTexture)
{
    pTexture->drawFrame(m_textureID, m_x, m_y,
                        m_width, m_height, m_currentRow,
                        m_currentFrame, pRenderer);
}

void GameObject::update(std::string id)
{
    if (id=="bala")
    {
        m_currentFrame = int(((SDL_GetTicks() / 100) % 1));
        m_y-=3;
    }
}

void GameObject::update_enemy()
{
 m_currentFrame = int(((SDL_GetTicks() / 100) % 1));
 m_y++;
}
