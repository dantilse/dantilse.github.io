import { Link } from "gatsby"
import PropTypes from "prop-types"
import React, { useState } from "react"
import LayoutContainer from "./layout-container"

import headerStyles from "../scss/components/header.module.scss"

let hs = headerStyles

const Header = ({ menuLinks, siteTitle, siteDescription }) => {
  const [open, setOpen] = useState(false)

  return (
    <header className={hs.siteHeader}>
      <LayoutContainer>
        <div className={hs.siteHeaderInner}>
          <Link className={hs.siteTitle} to="/">
            <span className={hs.siteName}>{siteTitle}</span>
            <span className={hs.siteDescription}>{siteDescription}</span>
          </Link>
          <div className={hs.siteNav}>
            <button
              className={hs.siteNavToggle}
              open={open}
              onClick={() => setOpen(!open)}
            >
              &#9776;
            </button>
            <ul className={open ? hs.open : ""}>
              {menuLinks.map(link => (
                <li key={link.name}>
                  {link.link.startsWith("//") ||
                  link.link.startsWith("mailto:") ? (
                    <a href={link.link}>
                      {/* target="_blank" rel="noreferrer noopener" */}
                      {link.name}
                    </a>
                  ) : (
                    <Link to={link.link}>{link.name}</Link>
                  )}
                </li>
              ))}
            </ul>
          </div>
        </div>
      </LayoutContainer>
    </header>
  )
}

Header.propTypes = {
  siteTitle: PropTypes.string,
}

Header.defaultProps = {
  siteTitle: ``,
}

export default Header
